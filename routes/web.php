<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController as AdminProductController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
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
Route::view(url:'/loginuser', view'home.login')->name('loginuser');
Route::view(url:'/registeruser', view'home.register');
Route::get(url:'/logoutuser',[Homecontroller::class, 'logout'])->name(name:'logoutuser');
Route::view(url:'/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');

// Call Controller Function
Route::get('/', [HomeController::class, 'index'])->name('home');

//Route->Controller->View
Route::get('/test', [HomeController::class, 'test'])->name('test');

//Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

//Route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');


Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');


Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function() {
    return view('dashboard');
})->name('dashboard');

    // ******* User Panel Routes *******
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/orders','orders')->name('orders');
        Route::get('/orderdetail/{id}', 'orderdetail')->name('orderdetail');
        Route::get('/cancelproduct/,{id}','cancelproduct')->name('cancelproduct');

    });

    // Route Group - route prefix, name prefix, controller prefix
    // ******* Admin Panel Routes *******
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function()){
    Route::get('/',[AdminHomeController::class,'index'])->name('index');
Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function() {
    Route::get('/', [AdminHomeController::class,'index'])->name('index');
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/edit/{id}', 'show')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::post('/addrole/{id}', 'addrole')->name('addrole');
    Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole'); } 
    
    // ******* ShopCart Routes *******
    Route::prefix('/shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/order', 'order')->name('order');
        Route::post('/storeorder', 'storeorder')->name('storeorder');    
        Route::post('/ordercomplete', 'ordercomplete')->name('ordercomplete');    
       

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


    // User Routes - home page, orders, cancel products
    Route::prefix('userhome')->name('userhome.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/orders','orders')->name('orders');
        Route::get('/orderdetail/{id}', 'orderdetail')->name('orderdetail');
        Route::get('/cancelproduct/,{id}','cancelproduct')->name('cancelproduct');


    });

    // ******* Shopping Cart *******
    Route::prefix('/shoppingcart')->name('shoppingcart.')->controller(ShoppingCartController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/add/{id}', 'add')->name('add');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/order', 'order')->name('order');
        Route::post('/storeorder', 'storeorder')->name('storeorder');    
        Route::post('/ordercomplete', 'ordercomplete')->name('ordercomplete');    
       
    });



    });
    // ******* Admin Message Routes *******
    Route::prefix('/message')->name('image.')->controller(controller: MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', action: 'update')->name(name:'update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

        });

    // ******* Admin Order Routes *******
    Route::prefix('/order')->name('order')->controller(OrderController::class)->group(function(){
        Route::get('/{slug}','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/cancelorder/{id}','cancelorder')->name('cancelorder');
        Route::get('/cancelproduct/,{id}','cancelproduct')->name('cancelproduct');
        Route::get('/acceptproduct/,{id}','acceptproduct')->name('acceptproduct');

    });

    }); //Admin Panel Routes group
});  // User authentication Group

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
