<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public function mount()
    {
        //
    }

    public function render()
    {
        // Berita utama
        $datas = News::where('is_active',true)
            ->orderBy('created_at', 'desc')
            ->with('author')
            ->paginate(8);

        // Popular News
        $otherNews = News::where('is_active',true)
        ->orderBy('views', 'desc')
        ->with('author')
        ->take(5)
        ->get();

        return view('livewire.front.news.all', [
            'datas' => $datas,
            'otherNews' => $otherNews,
        ]);
    }
}
