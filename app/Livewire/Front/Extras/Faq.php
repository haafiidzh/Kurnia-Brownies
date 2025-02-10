<?php

namespace App\Livewire\Front\Extras;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $datas = ModelsFaq::orderBy('sort_order', 'asc')
        ->where('is_active', true)
        ->get();
        return view('livewire.front.extras.faq',['datas' => $datas]);
    }
}
