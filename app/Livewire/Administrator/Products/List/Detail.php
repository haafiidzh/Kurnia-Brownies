<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Product;
use App\Models\ProductDetail;
use Livewire\Component;

class Detail extends Component
{
    public $id;

    public function mount($id)
    {

    }

    public function render()
    {
        // dd($this->id);
        $data = Product::find($this->id);
        // $detail = ProductDetail::where('product_id', $this->id)->get();
        // dd($detail);
        return view('livewire.administrator.products.list.detail', ['data' => $data]);
    }
}
