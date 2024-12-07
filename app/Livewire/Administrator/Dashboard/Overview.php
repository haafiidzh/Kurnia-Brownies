<?php

namespace App\Livewire\Administrator\Dashboard;

use App\Models\Categories;
use App\Models\News;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Overview extends Component
{
    public function render()
    {
        $user = User::count();
        $role = Role::count();
        $product = Product::count();
        $news = News::count();
        $product_category = Categories::where('group', 'product')->count();
        $news_category = Categories::where('group', 'product')->count();
        
        return view('livewire.administrator.dashboard.overview', [
            'user' => $user,
            'role' => $role,
            'product' => $product,
            'news' => $news,
            'product_category' => $product_category,
            'news_category' => $news_category,
        ]);
    }
}
