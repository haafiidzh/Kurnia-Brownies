<?php

namespace App\Livewire\Administrator\Dashboard;

use App\Models\Product;
use App\Models\ProductCategory;
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
        $category = ProductCategory::count();
        
        return view('livewire.administrator.dashboard.overview', [
            'user' => $user,
            'role' => $role,
            'product' => $product,
            'category' => $category,
        ]);
    }
}
