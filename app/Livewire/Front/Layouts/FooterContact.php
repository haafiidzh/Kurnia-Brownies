<?php

namespace App\Livewire\Front\Layouts;

use App\Models\AppSetting;
use Livewire\Component;

class FooterContact extends Component
{
    public $logo;

    public function mount()
    {
        $this->logo = AppSetting::where('key','logo')->get()->first();
    }

    public function render()
    {
        return view('livewire.front.layouts.footer-contact');
    }
}
