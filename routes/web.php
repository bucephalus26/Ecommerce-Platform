<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController as AdminProductController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
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

//********* HOME PAGE ROUTES ********* 
Route::get(url: '/',[HomeController::class, 'index'])->name( name: 'home');
Route::get(url: '/about',[HomeController::class, 'about'])->name( name: 'about');
Route::get(url: '/references',[HomeController::class, 'references'])->name( name: 'references');
Route::get(url: '/contact',[HomeController::class, 'contact'])->name( name: 'contact');
Route::view(url:'/loginuser', view'home.login');
Route::view(url:'/registeruser', view'home.register');
Route::get(url:'/logoutuser',[Homecontroller::class, 'logout'])->name(name:'logoutuser');
Route::post(url:'/loginadmin',[Homecontroller::class, 'loginadmin'])->name(name:'loginadmin');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'product'])->name( name:'product');

// Route Group - route prefix, name prefix, controller prefix
// ******* Admin Panel Routes *******
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

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
    Route::prefix('/message')->name('image.')->controller(controller: MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', action: 'update')->name(name:'update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

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
