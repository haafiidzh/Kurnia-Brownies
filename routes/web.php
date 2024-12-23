<?php

use App\Http\Controllers\Administrator\AppSettingController;
use App\Http\Controllers\Administrator\ContentController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\NewsCategoryController;
use App\Http\Controllers\Administrator\NewsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\RoleController;
use App\Http\Controllers\Administrator\PermissionController;
use App\Http\Controllers\Administrator\ProductCategoryController;
use App\Http\Controllers\Administrator\ProductController as AdministratorProductController;
use App\Http\Controllers\Administrator\ProfileController;
use App\Http\Controllers\administrator\SliderController;
use App\Http\Controllers\Front\NewsController as FrontNewsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

Route::get('/email/verify-email', [AuthController::class, 'notice'])->middleware(['auth','not.verified'])->name('verification.notice');
// halaman verif email hanya bisa diakses oleh user yg belum terverifikasi
// caranya buat custom middleware EnsureEmailIsNotVerified
// daftarkan not.verified di kernel.php

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/administrator');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::prefix('administrator')->as('administrator.')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');

    Route::middleware(['auth','verified'])->group(function () 
    {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('permission:view-dashboard');

        //====Extras====//

        // Profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('permission:view-profile');

        //====App Settings ====//

        // App Setting
        Route::get('/setting/main', [AppSettingController::class, 'index'])->name('app-setting')->middleware('permission:view-app-setting');
        Route::get('/setting/main/{id}/edit', [AppSettingController::class, 'edit'])->name('app-setting.edit')->middleware('permission:edit-app-setting');

        // Content
        Route::get('/setting/content', [ContentController::class, 'index'])->name('content')->middleware('permission:view-content');
        Route::get('/setting/content/{id}/edit', [ContentController::class, 'edit'])->name('content.edit')->middleware('permission:edit-content');

        //====App Management====//

        

        // Slider
        Route::get('/slider', [SliderController::class, 'index'])->name('sliders')->middleware('permission:view-slider');
        Route::get('/slider/create', [SliderController::class, 'create'])->name('sliders.create')->middleware('permission:create-slider');
        Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit')->middleware('permission:edit-slider');
        Route::get('/slider/{id}/detail', [SliderController::class, 'show'])->name('sliders.detail')->middleware('permission:edit-slider');

        /// Product

        // Product
        Route::get('/product/list', [AdministratorProductController::class, 'index'])->name('products')->middleware('permission:view-product');
        Route::get('/product/list/create', [AdministratorProductController::class, 'create'])->name('products.create')->middleware('permission:create-product');
        Route::get('/product/list/{id}/edit', [AdministratorProductController::class, 'edit'])->name('products.edit')->middleware('permission:edit-product');
        Route::get('/product/list/{id}/detail', [AdministratorProductController::class, 'show'])->name('products.detail')->middleware('permission:detail-product');
        Route::get('/product/archive', [AdministratorProductController::class, 'archive'])->name('products.archive')->middleware('permission:archive-product');
        

        // Product Category
        Route::get('/product/category', [ProductCategoryController::class, 'index'])->name('products.category')->middleware('permission:view-product-category');
        Route::get('/product/category/create', [ProductCategoryController::class, 'create'])->name('products.category.create')->middleware('permission:create-product-category');
        Route::get('/product/category/{id}/edit', [ProductCategoryController::class, 'edit'])->name('products.category.edit')->middleware('permission:edit-product-category');

        /// News

        // Product
        Route::get('/news', [NewsController::class, 'index'])->name('news')->middleware('permission:view-news');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('permission:create-news');
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('permission:edit-news');
        Route::get('/news/{id}/detail', [NewsController::class, 'show'])->name('news.detail')->middleware('permission:detail-news');
        

        // Product Category
        // Route::get('/news/category', [NewsCategoryController::class, 'index'])->name('news.category')->middleware('permission:view-news-category');
        // Route::get('/news/category/create', [NewsCategoryController::class, 'create'])->name('news.category.create')->middleware('permission:create-news-category');
        // Route::get('/news/category/{id}/edit', [NewsCategoryController::class, 'edit'])->name('news.category.edit')->middleware('permission:edit-news-category');

        //====Account Management====//

        // User
        Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('permission:view-users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('permission:create-users');
        Route::get('/users/{id}/detail', [UserController::class, 'show'])->name('users.detail')->middleware('permission:detail-users');;
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:edit-users');

        // Role
        Route::get('/roles', [RoleController::class, 'index'])->name('roles')->middleware('permission:view-roles');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create')->middleware('permission:create-roles');
        Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit')->middleware('permission:edit-roles');

        // Permission
        Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions')->middleware('permission:view-permission');
        Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create')->middleware('permission:create-permission');

    });
});

/// Front

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// News
Route::get('/news', [FrontNewsController::class, 'index'])->name('news');
Route::get('/news/category/{slug}', [FrontNewsController::class, 'custom'])->name('news.category');
Route::get('/news/{slug}', [FrontNewsController::class, 'show'])->name('news.detail');

// Product
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/category/{slug}', [ProductController::class, 'custom'])->name('product.category');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.detail');