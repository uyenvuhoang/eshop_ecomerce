/*
composer require livewire/livewire
composer require laravel/ui
php artisan ui:auth

npm install --save-dev vite laravel-vite-plugin
npm install --save-dev @vitejs/plugin-vue

php artisan make:controller Admin/DashboardController
php artisan make:migration add_details_to_users_table
php aritsan migrate
php artisan make:middleware AdminMiddleware
comment : protected $redirectTo = RouteServiceProvider::HOME; in Auth/LoginController

add in file Kernel.php   : 'isAdmin' => App\Http\Middleware\AdminMiddleware::class,
modifine Auth/LoginController

php artisan make:migration create_categories_table
php artisan migrate
php artisan make:model Category
php artisan make:controller Admin/CategoryController

php artisan make:request CategoryFormRequest
in file CategoryFormRequest modifine :  authorize()->true

php artisan make:livewire Admin/Category/Index

php artisan make:migration create_brands_table
php artisan make:model Brand
php artisan make:livewire Admin/Brand/Index

php artisan make:migration create_products_table
php artisan make:migration create_product_images_table
php artisan migrate

php artisan make:model Product
php artisan make:model ProductImage

php artisan make:controller Admin/ProductController
php artisan make:request ProductFormRequest

php artisan make:migration create_colors_table
php artisan migrate
php artisan make:controller Admin/ColorController
php artisan make:model Color

php artisan make:request ColorFormRequest
php artisan make:migration create_product_colors_table
php artisan migrate 
php artisan make:model ProductColor

php artisan make:migration create_sliders_table
php artisan migrate
php artisan make:model Slider
php artisan make:controller Admin/SliderController

php artisan make:request SliderFormRequest

php artisan make:controller Frontend/FrontendController

php artisan make:livewire Frontend/Product/Index

php artisan make:migration add_category_id_to_brands_table

php artisan make:livewire Frontend/Product/View

php artisan make:migration create_wishlists_table
php artisan make:model Wishlist

<!-- JavaScript -->
<!-- <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script> -->
<!-- CSS -->
<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/> -->
<!-- Default theme -->
<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/> -->

php artisan make:controller Frontend/WishlistController
php artisan make:livewire Frontend/WishlistShow

php artisan make:livewire Frontend/WishlistCount

php artisan make:migration create_carts_table
php artisan make:model Cart

php artisan make:livewire Frontend/Cart/CartCount
php artisan make:controller Frontend/CartController
php artisan make:livewire Frontend/Cart/CartShow

php artisan make:controller Frontend/CheckoutController
php artisan make:livewire Frontend/Checkout/CheckoutShow


php artisan make:migration create_orders_table
php artisan make:migration create_order_items_table
php artisan make:model Order
php artisan make:model OrderItem

php artisan make:controller Frontend/OrderController

php artisan make:controller Admin/OrderController

composer require barryvdh/laravel-dompdf\
php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider

php artisan make:migration create_settings_table
php artisan make:model Setting
php artisan make:controller Admin/UserController

php artisan make:controller Frontend/UserController
php artisan make:migration create_user_details_table
php artisan make:model UserDetail

php artisan make:mail InvoiceOrderMailable

*/