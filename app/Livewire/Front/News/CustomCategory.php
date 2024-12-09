<?php

namespace App\Livewire\Front\News;

use App\Models\News;
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
        $datas = News::where('category_id', $this->category->id)->paginate(10);
        return view('livewire.front.news.custom-category',[
            'datas' => $datas,
        ]);
    }
}
