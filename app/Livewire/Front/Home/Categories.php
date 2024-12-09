<?php

namespace App\Livewire\Front\Home;

use App\Models\Categories as ModelsCategories;
use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        $datas = ModelsCategories::where('group', 'product')->get();
        // dd($datas);s
        return view('livewire.front.home.categories', ['datas'=>$datas]);
    }
}
