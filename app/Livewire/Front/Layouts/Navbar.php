<?php

namespace App\Livewire\Front\Layouts;

use App\Models\Categories;
use Livewire\Component;

class Navbar extends Component
{
    public $datas;

    public function menu()
    {
        $products = Categories::where('group', 'product')->get();
        $news = Categories::where('group', 'news')->get();

        foreach ($products as $data) {
            $product_category[] = [
                'name' => $data->name,
                'route' => route('product.category', $data->slug), 
        ];
        }

        foreach ($news as $data) {
            $news_category[] = [
                'name' => $data->name,
                'route' => route('news.category', $data->slug), 
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
                'route' => route('news'),
                'active' => request()->is('news','news/*'),
                'has-child' => true,
                'childs' => $news_category
            ],
            [
                'name' => 'Product',
                'route' => route('product'),
                'active' => request()->is('product','product/*'),
                'has-child' => true,
                'childs' => $product_category
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
