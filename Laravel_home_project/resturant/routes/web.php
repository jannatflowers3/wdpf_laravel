<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [AdminController::class, 'users']);
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/orderlists', [AdminController::class, 'orderlists']);
Route::get('/searchOrder', [AdminController::class, 'searchOrder']);

//  reservation route start
Route::get('/viewreservation', [ReservationController::class, 'index']);

// chefs route start
Route::get('/chef', [ChefController::class, 'chef']);
Route::post('/uploadchef', [ChefController::class, 'uploadchef']);
Route::get('/chefslist', [ChefController::class, 'chefslist']);
Route::get('/deletechef/{id}', [ChefController::class, 'deletechef']);
Route::get('/eidtchef/{id}', [ChefController::class, 'eidtchef']);
Route::post('/updatechef/{id}', [ChefController::class, 'updatechef']);

// food route start
Route::get('/foodmenu', [FoodController::class, 'foodmenu']);
Route::post('/uploadfood', [FoodController::class, 'uploadfood']);
Route::get('/foodlist', [FoodController::class, 'foodlist']);
Route::get('/deletemenu/{id}', [FoodController::class, 'deletemenu']);
Route::get('/editmenu/{id}', [FoodController::class, 'editmenu']);
Route::post('/update/{id}', [FoodController::class, 'update']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
// Route::resource('/users', [AdminController::class]);
Route::get('/redirects', [HomeController::class, 'redirects']);
// addcart route start
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/remove/{id}', [HomeController::class, 'remove']);
// orderConfirm route
Route::post('/orderConfirm', [HomeController::class, 'orderConfirm']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
