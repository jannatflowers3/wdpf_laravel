<?php

use App\Http\Controllers\Api\DogsController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Reportcontroller;
use App\Http\Controllers\ShowAge;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\CheckAge;
use App\Models\User;
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
// controller sara manually routing create kora jai
// Route::get('/admin', function () {
//     return view('auth/login');
// });

// Route::get('/', [ProductController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');


Route::resource('products',ProductController::class);

Route::middleware([CheckAge::class])->group(function () {
    Route::get('showmyage', [ShowAge::class, 'index']);
});

// login route start
Route::middleware([AuthLogin::class])->group(function () {
    Route::post('/login', [Logincontroller::class,'login']);
});

Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/reports', [Reportcontroller::class, 'Report1']);
Route::get('/users', [Usercontroller::class, 'index']);
Route::get('/phoneData', [Usercontroller::class, 'phoneData']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/roles', [Usercontroller::class, 'roleAssign']);

Route::get('/send_mail', [MailController::class, 'index']);
Route::get('/contactform', [MailController::class, 'contactform']);
Route::post('/fdf', [MailController::class, 'MessageSend'])->name('sendMsg');

// Vue Search Route
Route::get('/search', [SearchController::class, 'search']);