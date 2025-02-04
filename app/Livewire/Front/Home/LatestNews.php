<?php

namespace App\Livewire\Front\Home;

use App\Models\Categories as ModelsCategories;
use App\Models\News;
use Livewire\Component;

class LatestNews extends Component
{
    public function render()
    {
        $datas = News::latest()->limit(4)->get();
        return view('livewire.front.home.latest-news', ['datas'=>$datas]);
    }
}
