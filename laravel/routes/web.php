<?php

use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\ProdukConroller;
use App\Http\Controllers\kategoriProdukConroller;
use App\Http\Controllers\pesananController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will    
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/after_register', function(){
    return view('after_register');
});
Route::get('/dashboard',[DashboardConroller::class, 'index' ]);

//route dashboard
Route::group(['middleware' => ['auth', 'role : admin-manager']], function(){


    Route::get('/produk',[ProdukConroller::class, 'index' ]);
    Route::get('/produk/create',[ProdukConroller::class, 'create' ]);
    Route::post('/produk/store',[ProdukConroller::class, 'store' ]);
    Route::get('/produk/edit/{id}',[ProdukConroller::class, 'edit' ]);
    Route::post('/produk/update',[ProdukConroller::class, 'update' ]);


    Route::get('/kategoriProduk',[kategoriProdukConroller::class, 'index' ]);
    Route::get('/kategoriProduk/create',[kategoriProdukConroller::class, 'create' ]);
    Route::get('/kategoriProduk/create',[kategoriProdukConroller::class, 'store' ]);


    Route::get('/pesanan',[pesananController::class, 'index' ]);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
