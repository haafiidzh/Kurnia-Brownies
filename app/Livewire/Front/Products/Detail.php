<?php

namespace App\Livewire\Front\Products;

use App\Models\Product;
use App\Models\ProductDetail;
use Livewire\Component;

class Detail extends Component
{
    public $data;
    public $gallery;
    public $relatedProducts;

    public function mount($slug)
    {
        $this->data = Product::where('slug', $slug)->first();

        $this->relatedProducts = Product::where('id', '!=', $this->data->id)
        ->inRandomOrder()
        ->limit(3)
        ->get();

        $this->gallery = $this->data->detail;
    }

    public function render()
    {   
        return view('livewire.front.products.detail');
    }
}
