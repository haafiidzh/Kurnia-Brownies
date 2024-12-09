<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;

class Recommended extends Component
{
    public function render()
    {
        $datas = News::where('recommended', true)->limit(9)->get();
        return view('livewire.front.news.recommended',['datas' => $datas]);
    }
}
