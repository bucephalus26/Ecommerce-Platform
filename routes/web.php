<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController as AdminProductController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
use App\Http\Controllers\UserController as UserController;
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

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/', function () {
    return view('welcome');
});

// ******* Home Page Routes *******
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'product'])->name( name:'product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name( name:'categoryproducts');
Route::get('/contact', [HomeController::class, 'contact'])->name( name:'contact');
Route::get('/about', [HomeController::class, 'about'])->name( name:'about');
Route::post('/contactform', [HomeController::class, 'contactform'])->name( name:'contactform'); // submit contact form.
 
// user login, logout and register routes
Route::view('/userlogin', 'home.login')->name('userlogin');
Route::view('/userregister', 'home.register')->name('userregister');
Route::get('/userlogout', [HomeController::class, 'logout'])->name( name:'userlogout');

// Admin login routes
Route::view('/adminlogin', 'admin.login')->name('adminlogin'); // page for login
// posts data to function
Route::post('/adminlogincheck', [HomeController::class,'adminlogincheck'])->name('adminlogincheck');


// Route Group - route prefix, name prefix, controller prefix with group authentication request
Route::middleware('auth')->group(function(){


    // User Routes
    Route::prefix('userhome')->name('userhome.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');

    });

    // Admin Routes
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        
        // ******* Admin General Routes *******
        Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
        Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('setting.update');

        // ******* Admin Category Routes *******
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        });

        // ******* Admin Product Routes *******
        Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

        // ******* Admin Images Routes *******
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{pid}','index')->name('index');
            Route::post('/store/{pid}','store')->name('store');
            Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
        });

        // ******* Admin Message Routes *******
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

        // ******************** ADMIN USER  ROUTES *************************
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/edit/{id}','show')->name('edit');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/deleterole/{uid}/{rid}','dgiteleterole')->name('deleterole');
        });
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
