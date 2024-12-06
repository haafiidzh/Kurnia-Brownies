<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view-dashboard',

            'view-profile',
            'edit-profile',

            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
            'detail-users',

            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',

            'view-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',

            'view-product',
            'create-product',
            'edit-product',
            'delete-product',
            'detail-product',
            'archive-product',
            'restore-product',

            'view-product-archive',

            'view-product-category',
            'edit-product-category',
            'create-product-category',
            'delete-product-category',
            
            'view-cms',
            'create-cms',
            'edit-cms',
            'delete-cms',
            'detail-cms',

            'view-slider',
            'create-slider',
            'edit-slider',
            'delete-slider',
            'detail-slider',
            
            'view-app-setting',
            'create-app-setting',
            'edit-app-setting',
            'delete-app-setting',
            'detail-app-setting',
        ];

        foreach($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission, 'guard_name' => 'web']);
        };
    }
}
