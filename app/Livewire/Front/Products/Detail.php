<?php

namespace App\Livewire\Front\Products;

use App\Models\Product;
use App\Models\ProductDetail;
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
        $this->data = Product::where('slug', $slug)->first();
        // dd($this->data);
        if (!$this->data) {
            abort(404, "Product not found");
        }

        $category = $this->data->category_id; 

        $this->prevProduct = Product::where('category_id', $category)
            ->where('id', '!=', $this->data->id)
            ->inRandomOrder()
            ->first();

        // Produk berikutnya (Next)
        $this->nextProduct = Product::where('category_id', $category)
            ->where('id', '!=', $this->data->id)
            ->orWhere('name','!=',$this->prevProduct->name) 
            ->inRandomOrder()
            ->first();

        $this->gallery = $this->data->detail;
        // dd($this->gallery);
    }

    public function render()
    {   
        
        return view('livewire.front.products.detail');
    }
}
