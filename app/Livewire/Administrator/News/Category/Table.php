<?php

namespace App\Livewire\Administrator\News\Category;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $category = Categories::find($id);
        if ($category) {
            $category->delete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Category berhasil dihapus.',
            ]);
            return redirect()->route('administrator.news.category');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Category tidak ditemukan.',
            ]);
            return redirect()->route('administrator.news.category');
        } 
    }

    public function render()
    {
        $category = Categories::where('group','news')->when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })
        ->orderBy('name','asc')
        ->paginate(10);

        return view('livewire.administrator.news.category.table',['category' => $category]);
    }
}
