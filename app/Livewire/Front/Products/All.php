<?php

namespace App\Livewire\Front\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public function render()
    {
        $datas = Product::orderBy('name','asc')->paginate(10);
        return view('livewire.front.products.all', ['datas' => $datas]);
    }
}
