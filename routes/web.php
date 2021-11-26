<?php

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
    return view('home',$data);
});

Route::get('/blog', PostController::class . '@index');

Route::get('/post/{slug}', PostController::class . '@show');

Route::get('/about', function () {
    $data = [
        'image' => '/images/rio.jpg',
        'name' => 'Rio Andrianto',
        'email' => 'r.andrianto@gmail.com',
    ];
    return view('about',$data);
});
