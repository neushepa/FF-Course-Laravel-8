<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    $data = [
        'greeting' => 'Selamat Datang di Starter Kits',
    ];
    return view('home', $data);
});

Route::get('/blog', BlogController::class . '@index');
Route::get('/blog/{slug}', BlogController::class . '@show');

// Route Post
Route::resource('post', PostController::class);

Route::get('/about', function () {
    $data = [
        'image' => '/images/rio.jpg',
        'name' => 'Rio Andrianto',
        'email' => 'r.andrianto@gmail.com',
    ];
    return view('about', $data);
});

Route::get('/credit', function () {
    $data = [
        'title' => 'Credits',
        'body' => 'Herzlich Willkommen',

    ];
    return view('admin.credit', $data);
})->name('credit');

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware(['check-middleware', 'auth']);
