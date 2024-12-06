<?php

namespace App\Livewire\Front\Home;

use App\Models\Slider as ModelsSlider;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        $datas = ModelsSlider::orderBy('position', 'asc')->get();
        // dd($datas);
        return view('livewire.front.home.slider', ['datas' => $datas]);
    }
}
