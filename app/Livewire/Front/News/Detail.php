<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $data;
    public $gallery;
    public $nextNews;
    public $prevNews;

    public function mount($slug)
    {
        // Ambil data produk yang sedang dibuka
        $this->data = News::where('slug', $slug)->first(); 

        $this->data->incrementViews();
    }

    public function render()
    {   
        $otherNews = News::where('is_active',true)
        ->where('id', '!=', $this->data->id)
        ->orderBy('views', 'desc')
        ->with('author')
        ->take(3)
        ->get();

        return view('livewire.front.news.detail',
        [
            'otherNews' => $otherNews,
        ]);
    }
}
