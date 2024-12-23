<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $data;

    public function mount($id)
    {
        $news = News::find($id);
        $this->data = $news;
    }

    public function render()
    {
        
        return view('livewire.administrator.news.detail');
    }
}
