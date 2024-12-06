<?php

namespace App\Livewire\Front\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CustomCategory extends Component
{
    use WithPagination;
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $datas = Product::where('category_id', $this->category->id)->paginate(10);
        return view('livewire.front.products.custom-category',[
            'datas' => $datas,
        ]);
    }
}
