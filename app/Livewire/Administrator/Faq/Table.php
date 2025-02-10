<?php

namespace App\Livewire\Administrator\Faq;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

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
            Faq::where('id', $item['value'])->update(['sort_order' => $item['order']]);
        }
    
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil mengubah urutan FAQ.',
        ]);
    }

    public function togglePublished($id)
    {
        $faq = Faq::find($id);

        if ($faq) {
            $faq->is_active = !$faq->is_active;
            $faq->save();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil mengubah status FAQ.',
            ]);

            return redirect()->route('administrator.faq');
        }
    }

    public function delete($id)
    {
        $faq = Faq::find($id);
        if ($faq) {

            $faq->delete();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil menghapus FAQ.',
            ]);
            return redirect()->route('administrator.faq');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'FAQ tidak ditemukan.',
            ]);
            return redirect()->route('administrator.faq');
        } 
    }
    
    public function render()
    {
        $faqs = Faq::when($this->search, function ($query) {
            $query->where('question', 'like', '%' . $this->search . '%');
        })
        ->orderBy('sort_order','asc')
        ->paginate(8);

        return view('livewire.administrator.faq.table', ['faqs' => $faqs]);
    }

}
