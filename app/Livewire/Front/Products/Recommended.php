<?php

namespace App\Livewire\Front\Products;

use App\Models\Product;
use Livewire\Component;

class Recommended extends Component
{
    public function render()
    {
        $datas = Product::where('recommended', true)->latest()->limit(6)->get();
        return view('livewire.front.products.recommended',['datas' => $datas]);
    }
}
