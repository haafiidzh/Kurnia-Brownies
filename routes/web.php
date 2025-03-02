<?php

use App\Http\Controllers\Administrator\AppSettingController;
use App\Http\Controllers\Administrator\ContentController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\FaqController as AdministratorFaqController;
use App\Http\Controllers\Administrator\FeedbackController;
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
use App\Http\Controllers\Administrator\SeoController;
use App\Http\Controllers\administrator\SliderController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\NewsController as FrontNewsController;
use App\Http\Controllers\Front\PricelistController;
use App\Http\Controllers\Front\PrivacyPolicyController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    return 'Cache Cleared!';
});
Route::get('/migrate-seed', function() {
    Artisan::call('migrate:fresh --seed');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    return 'Migrate Success!';
});

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

        // SEO        
        Route::get('/setting/seo', [SeoController::class, 'index'])->name('seo')->middleware('permission:view-seo');
        Route::get('/setting/seo/{id}/edit', [SeoController::class, 'edit'])->name('seo.edit')->middleware('permission:edit-seo');

        //====App Management====//

        // Feedback
        Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback')->middleware('permission:view-feedback');
        Route::get('/feedback/{id}/reply', [FeedbackController::class, 'reply'])->name('feedback.reply')->middleware('permission:reply-feedback');
        Route::get('/feedback/{id}/detail', [FeedbackController::class, 'show'])->name('feedback.detail')->middleware('permission:detail-feedback');

        // FAQ
        Route::get('/faq', [AdministratorFaqController::class, 'index'])->name('faq')->middleware('permission:view-faq');
        Route::get('/faq/create', [AdministratorFaqController::class, 'create'])->name('faq.create')->middleware('permission:create-faq');
        Route::get('/faq/{id}/edit', [AdministratorFaqController::class, 'edit'])->name('faq.edit')->middleware('permission:edit-faq');
        // Route::get('/faq/{id}/detail', [AdministratorFaqController::class, 'show'])->name('faq.detail')->middleware('permission:edit-faq');

        // Slider
        Route::get('/slider', [SliderController::class, 'index'])->name('sliders')->middleware('permission:view-slider');
        Route::get('/slider/create', [SliderController::class, 'create'])->name('sliders.create')->middleware('permission:create-slider');
        Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit')->middleware('permission:edit-slider');
        Route::get('/slider/{id}/detail', [SliderController::class, 'show'])->name('sliders.detail')->middleware('permission:detail-slider');

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
        Route::get('/news', [NewsController::class, 'index'])->name('news')->middleware('permission:view-news');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('permission:create-news');
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('permission:edit-news');
        Route::get('/news/{id}/detail', [NewsController::class, 'show'])->name('news.detail')->middleware('permission:detail-news');
        
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
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('contact');

// Pricelist
Route::get('/pricelist', [PricelistController::class, 'index'])->name('pricelist');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Privacy Policy
Route::get('/kebijakan-privasi', [PrivacyPolicyController::class, 'index'])->name('privacy');

// Feedback
Route::get('/hubungi-kami#feedback')->name('feedback');

// News
Route::get('/berita', [FrontNewsController::class, 'index'])->name('news');
// Route::get('/berita/kategori/{slug}', [FrontNewsController::class, 'custom'])->name('news.category');
Route::get('/berita/{slug}', [FrontNewsController::class, 'show'])->name('news.detail');

// Product
Route::get('/produk', [ProductController::class, 'index'])->name('product');
// Route::get('/produk/kategori/{slug}', [ProductController::class, 'custom'])->name('product.category');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('product.detail');