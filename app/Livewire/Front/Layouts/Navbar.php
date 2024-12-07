<?php

namespace App\Livewire\Front\Layouts;

use App\Models\ProductCategory;
use Livewire\Component;

class Navbar extends Component
{
    public $datas;

    public function menu()
    {
        $datas = ProductCategory::all();

        foreach ($datas as $data) {
            $category[] = [
                'name' => $data->name,
                'route' => route('product.category', $data->slug), 
        ];
        }

        return [
            [
                'name' => 'Home',
                'route' => route('home'),
                'active' => request()->is('/'),
                'has-child' => false,
                'childs' => [],
            ],
            [
                'name' => 'News',
                'route' => route('home'),
                'active' => request()->is('product'),
                'has-child' => false,
                'childs' => [],
            ],
            [
                'name' => 'Product',
                'route' => route('product'),
                'active' => request()->is('product','product/*'),
                'has-child' => true,
                'childs' => $category
            ],
            [
                'name' => 'Pricelist',
                'route' => route('product'),
                'active' => request()->is('product','product/*'),
                'has-child' => false,
                'childs' => []
            ],
            [
                'name' => 'About',
                'route' => route('about'),
                'active' => request()->is('about','about/*'),
                'has-child' => false,
                'childs' => [],
            ],
            [
                'name' => 'Contact',
                'route' => route('contact'),
                'active' => request()->is('contact','contact/*'),
                'has-child' => false,
                'childs' => [],
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
