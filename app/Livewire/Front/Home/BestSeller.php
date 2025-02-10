<?php

namespace App\Livewire\Front\Home;

use App\Models\Product;
use Livewire\Component;

class BestSeller extends Component
{
    public function render()
    {
        $datas = Product::where('best_seller', true)->get();
        return view('livewire.front.home.best-seller', ['datas'=>$datas]);
    }
}
