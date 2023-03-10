<?php

use App\Http\Controllers\backend\Logincontroller;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\Homecontroller;
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
//  Frontend roures
// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/',[Homecontroller::class, 'index']);
// Backend route
// Route::get('/admin',[Logincontroller::class, 'login']);

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/users',UserController::class);
});
