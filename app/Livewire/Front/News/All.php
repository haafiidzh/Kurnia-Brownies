<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public $highlightedNewsId; // ID untuk berita utama (highlighted)

    public function mount()
    {
        // Ambil ID berita terbaru untuk dijadikan berita utama (highlighted)
        $this->highlightedNewsId = News::orderBy('created_at', 'desc')->value('id');
    }

    public function render()
    {
        // Berita utama
        $datas = News::where('is_active',true)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        // Berita lain
        $otherNews = News::where('is_active',true)
            ->where('id', '!=', $this->highlightedNewsId)
            ->orderBy('created_at', 'desc')
            ->take(5) // Ambil 5 berita lain (sesuaikan jumlah)
            ->get();

        return view('livewire.front.news.all', [
            'datas' => $datas,
            'otherNews' => $otherNews,
        ]);
    }
}
