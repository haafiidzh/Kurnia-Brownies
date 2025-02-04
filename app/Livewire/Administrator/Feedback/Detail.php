<?php

namespace App\Livewire\Administrator\Feedback;

use App\Models\Feedback;
use Livewire\Component;

class Detail extends Component
{
    public $data;

    public function mount($id)
    {
        $this->data = Feedback::find($id);
    }

    public function render()
    {
        return view('livewire.administrator.feedback.detail');
    }
}
