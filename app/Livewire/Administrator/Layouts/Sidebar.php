<?php

namespace App\Livewire\Administrator\Layouts;

use Livewire\Component;

class Sidebar extends Component
{
    public function menu()
    {
        return [
            [
                'name' => 'Dashboard',
                'route' => route('administrator.dashboard'),
                'icon' => 'fa-solid fa-house',
                'active' => request()->is('administrator'),
                'permission' => ['view-dashboard'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'Website Management',
                'route' => null,
                'icon' => '',
                'active' => '',
                'permission' => [
                    'view-cms',
                    'view-product-archive',
                    'view-product-category',
                ],
                'is_separator' => true,
                'childs' => [],
            ],
            [
                'name' => 'Slider',
                'route' => route('administrator.sliders'),
                'icon' => 'fa-regular fa-images',
                'active' => request()->is('administrator/slider', 'administrator/slider/*'),
                'permission' => [
                    'view-slider',
                ],
                'is_separator' => false,
                'childs' => [],
            ],
            // [
            //     'name' => 'CMS',
            //     'route' => '',
            //     'icon' => 'fa-solid fa-table-cells',
            //     'active' => request()->is('administrator/cms', 'administrator/cms/*'),
            //     'permission' => ['view-cms'],
            //     'is_separator' => false,
            //     'childs' => [
            //         [
            //             'name' => 'Content',
            //             'route' => route('administrator.cms'),
            //             'icon' => 'fa-solid fa-bars-staggered',
            //             'active' => request()->is('administrator/cms/content', 'administrator/cms/content/*'),
            //             'permission' =>
            //             [
            //                 'view-cms'
            //             ],
            //         ],
            //         [
            //             'name' => 'Slider',
            //             'route' => route('administrator.sliders'),
            //             'icon' => 'fa-regular fa-images',
            //             'active' => request()->is('administrator/cms/slider', 'administrator/cms/slider/*'),
            //             'permission' =>
            //             [
            //                 'view-cms'
            //             ],
            //         ],
                    
            //     ],
            // ],
            [
                'name' => 'Produk',
                'route' => '',
                'icon' => 'fa-solid fa-cart-shopping',
                'active' => request()->is('administrator/product', 'administrator/product/*'),
                'permission' => ['view-product'],
                'is_separator' => false,
                'childs' => [
                    [
                        'name' => 'Daftar',
                        'route' => route('administrator.products'),
                        'icon' => 'fa-solid fa-list',
                        'active' => request()->is('administrator/product/list', 'administrator/product/list/*'),
                        'permission' =>
                        [
                            'view-product'
                        ],
                    ],
                    [
                        'name' => 'Kategori',
                        'route' => route('administrator.products.category'),
                        'icon' => 'fa-solid fa-layer-group',
                        'active' => request()->is('administrator/product/category', 'administrator/product/category/*'),
                        'permission' =>
                        [
                            'view-product-category',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'Berita',
                'route' => route('administrator.news'),
                'icon' => 'fa-solid fa-newspaper',
                'active' => request()->is('administrator/news', 'administrator/news/*'),
                'permission' => ['view-news'],
                'is_separator' => false,
                'childs' => [
                    // [
                    //     'name' => 'Daftar',
                    //     'route' => route('administrator.news'),
                    //     'icon' => 'fa-solid fa-list',
                    //     'active' => request()->is('administrator/news/list', 'administrator/news/list/*'),
                    //     'permission' =>
                    //     [
                    //         'view-news'
                    //     ],
                    // ],
                    // [
                    //     'name' => 'Kategori',
                    //     'route' => route('administrator.news.category'),
                    //     'icon' => 'fa-solid fa-layer-group',
                    //     'active' => request()->is('administrator/news/category', 'administrator/news/category/*'),
                    //     'permission' =>
                    //     [
                    //         'view-news-category',
                    //     ],
                    // ]
                ],
            ],
            [
                'name' => 'Pengaturan',
                'route' => null,
                'icon' => 'fa-solid fa-gear',
                'active' => request()->is('administrator/setting', 'administrator/setting/*'),
                'permission' => [
                    'view-content',
                    'view-app-setting',
                ],
                'is_separator' => false,
                'childs' => [
                    [
                        'name' => 'Utama',
                        'route' => route('administrator.app-setting'),
                        'icon' => 'fa-solid fa-bars-staggered',
                        'active' => request()->is('administrator/setting/main', 'administrator/setting/main/*'),
                        'permission' =>
                        [
                            'view-app-setting'
                        ],
                    ],
                    [
                        'name' => 'Konten',
                        'route' => route('administrator.content'),
                        'icon' => 'fa-solid fa-table-cells',
                        'active' => request()->is('administrator/setting/content', 'administrator/setting/content/*'),
                        'permission' =>
                        [
                            'view-content'
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Account Management',
                'route' => null,
                'icon' => '',
                'active' => '',
                'permission' =>
                [
                    'view-users',
                    'view-roles',
                    'views-permission',
                ],
                'is_separator' => true,
                'childs' => [],
            ],
            [
                'name' => 'User',
                'route' => route('administrator.users'),
                'icon' => 'fa-solid fa-users',
                'active' => request()->is('administrator/users', 'administrator/users/*'),
                'permission' => ['view-users'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'Role',
                'route' => route('administrator.roles'),
                'icon' => 'fa-solid fa-shield',
                'active' => request()->is('administrator/roles', 'administrator/roles/*'),
                'permission' => ['view-roles'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'Permission',
                'route' => route('administrator.permissions'),
                'icon' => 'fa-solid fa-lock',
                'active' => request()->is('administrator/permissions', 'administrator/permissions/*'),
                'permission' => ['view-permission'],
                'is_separator' => false,
                'childs' => [],
            ]
        ];
    }

    public function render()
    {
        return view(
            'livewire.administrator.layouts.sidebar',
            ['menu' => self::menu()]
        );
    }
}
