<?php

namespace App\Livewire\Administrator\News\List;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $id;

    public function mount($id)
    {

    }

    public function render()
    {
        $data = News::find($this->id);
        return view('livewire.administrator.news.list.detail', ['data' => $data]);
    }
}
