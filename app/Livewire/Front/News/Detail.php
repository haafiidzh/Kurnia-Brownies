<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $data;
    public $gallery;
    public $nextProduct;
    public $prevProduct;

    public function mount($slug)
    {
        // Ambil data produk yang sedang dibuka
        $this->data = News::where('slug', $slug)->first();
        if (!$this->data) {
            abort(404, "Product not found");
        }

        $category = $this->data->category_id; 

        $this->prevProduct = News::where('category_id', $category)
            ->where('id', '!=', $this->data->id)
            ->inRandomOrder()
            ->first();

        // Produk berikutnya (Next)
        $this->nextProduct = News::where('category_id', $category)
            ->where('id', '!=', $this->data->id)
            ->orWhere('name','!=',$this->prevProduct->name) 
            ->inRandomOrder()
            ->first();

        $this->gallery = $this->data->detail;
    }

    public function render()
    {   
        
        return view('livewire.front.news.detail');
    }
}
