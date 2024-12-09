<?php

namespace App\Livewire\Front\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public function render()
    {
        $datas = News::orderBy('created_at','desc')->paginate(10);
        return view('livewire.front.news.all', ['datas' => $datas]);
    }
}
