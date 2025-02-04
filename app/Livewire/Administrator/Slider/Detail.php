<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Livewire\Component;

class Detail extends Component
{
    public $data;

    public function mount($id)
    {
        $this->data = Slider::find($id);
    }

    public function render()
    {   
        return view('livewire.administrator.slider.detail');
    }
}
