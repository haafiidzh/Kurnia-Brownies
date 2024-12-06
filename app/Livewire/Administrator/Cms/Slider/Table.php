<?php

namespace App\Livewire\Administrator\Cms\Slider;

use App\Models\Slider;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $id;
    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updateTaskOrder($data)
    {
        foreach ($data as $item) {
            Slider::where('id', $item['value'])->update(['position' => $item['order']]);
        }
    
        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Urutan slider berhasil diperbarui.',
        ]);
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        if ($slider) {

            // Hapus image galeri
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            
            $slider->delete();

            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Slider berhasil dihapus.',
            ]);
            return redirect()->route('administrator.sliders');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Slider tidak ditemukan.',
            ]);
            return redirect()->route('administrator.sliders');
        } 
    }

    public function render()
    {
        $datas = Slider::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })
        ->orderBy('position','asc')
        ->paginate(15);
        return view('livewire.administrator.cms.slider.table', ['datas' => $datas]);
    }
}
