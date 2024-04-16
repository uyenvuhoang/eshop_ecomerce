<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\BrandComponent;
use App\Http\Livewire\Admin\ProductComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//======================== Guest ===================
Auth::routes();
Route::get('login-google', [LoginController::class, 'redirectToGoogle']);
Route::get('google-callback', [LoginController::class, 'handleGoogleCallback']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/collections', 'categories');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productView');
    Route::get('/api/collections/{product_id}', 'productViewApi');
    Route::get('/new-arrivals', 'newArrivals');
    Route::get('/featured-products', 'featuredProducts');
    Route::get('/contact-us', 'contact');
    Route::get('search', 'searchProducts');
    Route::get('sendmail', 'sendmail');
    Route::get('thank-you', 'thankyou');
});
 
//=============== User =================
Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [OrderController::class, 'show']);
    Route::get('/profile', [FrontendUserController::class, 'index']);
    Route::post('/profile', [FrontendUserController::class, 'updateUserDetail']);
    Route::get('/change-password', [FrontendUserController::class, 'passwordCreate']);
    Route::post('/change-password', [FrontendUserController::class, 'changePassword']);
    Route::controller(CompareController::class)->group(function() {
        Route::get('/addCompare/{productId}' , 'addToCompare');
        Route::get('/gotoCompare' , 'gotoCompare');
        Route::get('/deleteCompare/{compareId}' , 'deleteFromCompare');
        Route::get('/compareReturn' , 'compareReturn');
    });
});

//==================== Admin ====================
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // Minh
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('/products', ProductComponent::class);

    Route::controller(AdminOrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'updateOrderStatus');
        Route::get('/invoice/{orderId}', 'viewInvoice');
        Route::get('/invoice/{orderId}/generate', 'generateInvoice');
        Route::get('/invoice/{orderId}/mail', 'mailInvoice');
    });

    // Tuan
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
        Route::get('/category/{category}/delete', 'destroy');
    });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings', 'index');
        Route::post('/settings', 'store');
    });

    //Uyên
    Route::get('/brands', BrandComponent::class);
    
    Route::controller(ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors/{color_id}/delete', 'destroy');
    });

    //Linh
    Route::controller(SliderController::class)->group(function () {
        Route::get('/sliders', 'index');
        Route::get('/sliders/create', 'create');
        Route::post('/sliders/create', 'store');
        Route::get('/sliders/{slider}/edit', 'edit');
        Route::put('/sliders/{slider}', 'update');
        Route::get('/sliders/{slider}/delete', 'destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index');
        Route::get('/users/create', 'create');
        Route::post('/users', 'store');
        Route::get('/users/{user_id}/edit', 'edit');
        Route::put('/users/{user_id}', 'update');
        Route::get('/users/{user_id}/delete', 'destroy');
    });
    
});
