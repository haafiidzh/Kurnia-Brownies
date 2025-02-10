<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Table extends Component
{
    use WithPagination;

    public $search;

    public array $queryString =[
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

    public function delete($id)
    {
        $news = News::find($id);
        if ($news) {

            // Hapus image galeri
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            $news->delete();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil menghapus berita.',
            ]);
            return redirect()->route('administrator.news');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Berita tidak ditemukan.',
            ]);
            return redirect()->route('administrator.news');
        } 
    }

    public function togglePublished($id)
    {
        $news = News::find($id);

        if ($news) {
            $news->is_active = !$news->is_active;
            $news->save();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil mengubah status berita.',
            ]);

            return redirect()->route('administrator.news');
        }
    }
    
    public function render()
    {
        $news = News::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%');
        })
        ->orderBy('created_at','desc')
        ->paginate(8);

        return view('livewire.administrator.news.table', ['news' => $news]);
    }

}
