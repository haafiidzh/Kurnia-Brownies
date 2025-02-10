<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $id;
    public $search;

    public array $queryString = [
        'search',
    ];

    public function mount()
    {
        $this->search;
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
            'type' => 'created',
            'message' => 'Berhasil memperbarui urutan slider.',
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
                'type' => 'created',
                'message' => 'Berhasil menghapus slider.',
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

    public function togglePublished($id)
    {
        $slider = Slider::find($id);

        if ($slider) {
            $slider->is_active = !$slider->is_active;
            $slider->save();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil mengubah status slider.',
            ]);

            return redirect()->route('administrator.sliders');
        }
    }

    public function render()
    {
        $datas = Slider::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%');
        })
        ->orderBy('position','asc')
        ->get();
        
        return view('livewire.administrator.slider.table', ['datas' => $datas]);
    }
}
