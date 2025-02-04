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

        $this->prevNews = News::where('id', '!=', $this->data->id)
            ->inRandomOrder()
            ->first();

        // Produk berikutnya (Next)
        $this->nextNews = News::where('id', '!=', $this->data->id)
            ->orWhere('title','!=',$this->prevNews->title) 
            ->inRandomOrder()
            ->first();

        $this->gallery = $this->data->detail;
    }

    public function render()
    {   
        
        return view('livewire.front.news.detail');
    }
}
