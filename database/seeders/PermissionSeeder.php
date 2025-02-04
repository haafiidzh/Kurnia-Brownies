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

            'view-news',
            'edit-news',
            'create-news',
            'delete-news',
            'detail-news',

            'view-slider',
            'create-slider',
            'edit-slider',
            'delete-slider',
            'detail-slider',

            'view-feedback',
            'create-feedback',
            'edit-feedback',
            'delete-feedback',
            'detail-feedback',
            
            'view-faq',
            'create-faq',
            'edit-faq',
            'delete-faq',
            'detail-faq',
            
            'view-app-setting',
            'create-app-setting',
            'edit-app-setting',
            'delete-app-setting',
            'detail-app-setting',

            'view-content',
            'create-content',
            'edit-content',
            'delete-content',
            'detail-content',
        ];

        foreach($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission, 'guard_name' => 'web']);
        };
    }
}
