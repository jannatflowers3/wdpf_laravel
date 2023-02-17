<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\AdminController;
//  use App\Http\Controllers\ProductController;
 use App\Http\Controllers\ProductCon;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect',[HomeController::class,'redirect']);
//  admin category route
Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/catagorylists',[AdminController::class,'catagorylists']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/edit_category/{id}',[AdminController::class,'edit_category']);
Route::post('/update_category/{id}',[AdminController::class,'update_category']);
// product route list
// Route::resource('products',ProductController::class);

Route::get('/view_product',[ProductCon::class,'view_product']);
Route::post('/add_product',[ProductCon::class,'add_product']);
Route::get('/productList',[ProductCon::class,'productList']);
Route::get('/delete_product/{id}',[ProductCon::class,'delete_product']);
Route::get('/edit_product/{id}',[ProductCon::class,'edit_product']);
Route::post('/update_product/{id}',[ProductCon::class,'update_product']);

// menu router link
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
// add_product route
Route::post('/add_product/{id}',[HomeController::class,'add_product']);

