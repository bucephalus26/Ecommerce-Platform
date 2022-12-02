<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController as AdminProductController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
use App\Http\Controllers\AdminPanel\OrderController as OrderController;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\ShoppingCartController as ShoppingCartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Home Page Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'product'])->name( name:'product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name( name:'categoryproducts');
Route::get('/contact', [HomeController::class, 'contact'])->name( name:'contact');
Route::get('/about', [HomeController::class, 'about'])->name( name:'about');
Route::post('/contactform', [HomeController::class, 'contactform'])->name( name:'contactform'); // submit contact form.
 
/*
|--------------------------------------------------------------------------
| USER ACCESS Routes - login, logout, register
|--------------------------------------------------------------------------
*/
Route::view('/userlogin', 'home.login')->name('userlogin');
Route::view('/userregister', 'home.register')->name('userregister');
Route::get('/userlogout', [HomeController::class, 'logout'])->name( name:'userlogout');

/*
|--------------------------------------------------------------------------
| ADMIN ACCESS Routes - login, and authentication
|--------------------------------------------------------------------------
*/
// Admin login routes
Route::view('/adminlogin', 'admin.login')->name('adminlogin'); // page for login
// posts data to function
Route::post('/adminlogincheck', [HomeController::class,'adminlogincheck'])->name('adminlogincheck');

/*
|--------------------------------------------------------------------------
| ROUTE GROUP - ADMIN, USER, ORDER, CART, ROUTES
|--------------------------------------------------------------------------
| Here are the routes for the admin panel. These include the routes to manage
| categories, products, images, messages from contact us form, users, orders,
| and the website settings.
|
|
| Here are also the routes for the user home page, the shopping cart, and
| order creation.
|
*/
// route prefix, name prefix, controller prefix with group authentication request
Route::middleware('auth')->group(function(){

    // Admin Routes
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        
        // Admin CATEGORY Routes
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
       
        });

        // Admin PRODUCT Routes 
        Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            
        });

        // Admin MESSAGE Routes 
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            
        });

        // Admin Images Routes 
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{pid}','index')->name('index');
            Route::post('/store/{pid}','store')->name('store');
            Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
        });

        // ADMIN USER  ROUTES 
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/edit/{id}','show')->name('edit');
            
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/deleterole/{uid}/{rid}','deleterole')->name('deleterole');
        });

        // Admin ORDER Routes
        Route::prefix('/order')->name('order.')->controller(OrderController::class)->group(function(){
            Route::get('/{slug}','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            
            // order, product cancelation
            Route::get('/cancelorder/{id}','cancelorder')->name('cancelorder');
            Route::get('/cancelproduct/,{id}','cancelproduct')->name('cancelproduct');
            Route::get('/acceptproduct/,{id}','acceptproduct')->name('acceptproduct');
        });

        // Admin SETTINGS Routes
        Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
        Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('setting.update');

    });

    // User Routes - home page, order menu, manage orders
    Route::prefix('userhome')->name('userhome.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/cancelorder/{id}','cancelorder')->name('cancelorder');
        Route::get('/orderdetail/{id}', 'orderdetail')->name('orderdetail');
        Route::get('/cancelproduct/{id}','cancelproduct')->name('cancelproduct');
        Route::get('/orders','orders')->name('orders');
       
    });

    // Shopping Cart
    Route::prefix('/shoppingcart')->name('shoppingcart.')->controller(ShoppingCartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
        
        // Create order routes
        Route::post('/createorder', 'createorder')->name('createorder'); 
        Route::post('/order', 'order')->name('order');
         
    });

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
