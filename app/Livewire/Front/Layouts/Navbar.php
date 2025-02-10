<?php

namespace App\Livewire\Front\Layouts;

use App\Models\AppSetting;
use Livewire\Component;

class Navbar extends Component
{
    public $datas;

    public function mount()
    {
        //
    }

    public function menu()
    {
        return [
            [
                'name' => 'Beranda',
                'route' => route('home'),
                'active' => request()->is('/'),
            ],
            [
                'name' => 'Berita',
                'route' => route('news'),
                'active' => request()->is('news','news/*'),
            ],
            [
                'name' => 'Produk',
                'route' => route('product'),
                'active' => request()->is('product','product/*'),
                'has-child' => true,
            ],
            [
                'name' => 'Tentang Kami',
                'route' => route('about'),
                'active' => request()->is('about','about/*'),
            ],
            [
                'name' => 'Hubungi Kami',
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
