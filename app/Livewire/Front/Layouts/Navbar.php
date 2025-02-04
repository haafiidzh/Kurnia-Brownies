<?php

namespace App\Livewire\Front\Layouts;

use App\Models\AppSetting;
use Livewire\Component;

class Navbar extends Component
{
    public $datas;
    public $logo;

    public function mount()
    {
        $this->logo = AppSetting::where('key','logo')->get()->first();
    }

    public function menu()
    {
        return [
            [
                'name' => 'Home',
                'route' => route('home'),
                'active' => request()->is('/'),
            ],
            [
                'name' => 'News',
                'route' => route('news'),
                'active' => request()->is('news','news/*'),
            ],
            [
                'name' => 'Product',
                'route' => route('product'),
                'active' => request()->is('product','product/*'),
                'has-child' => true,
            ],
            [
                'name' => 'About',
                'route' => route('about'),
                'active' => request()->is('about','about/*'),
            ],
            [
                'name' => 'Contact',
                'route' => route('contact'),
                'active' => request()->is('contact','contact/*'),
            ],
        ];
    }

    public function render()
    {
        return view(
            'livewire.front.layouts.navbar',
            ['menu' => self::menu()]
        );
    }
}
