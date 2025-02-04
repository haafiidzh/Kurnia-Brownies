<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Product;
use App\Models\ProductDetail;
use Livewire\Component;

class Detail extends Component
{
    public $data;

    public function mount($id)
    {
        $this->data = Product::find($id);
    }

    public function render()
    {   
        return view('livewire.administrator.products.list.detail');
    }
}
