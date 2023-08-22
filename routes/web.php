<?php

use App\Models\Post;
use App\Models\Collection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardComponentController;
use App\Http\Controllers\DashboardComponentPostController;

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
    $collections = Collection::all();
    return view('partials.home',[
        "title" => "Post",
        "posts" => Post::all(),
        "collection" => $collections->last()
    ]
    );
})->middleware('guest');

Route::get('/home', function () {
    $collections = Collection::all();
    return view('partials.home',[
        "title" => "Post",
        "posts" => Post::all(),
        "collection" => $collections->last()
    ]
    );
})->middleware('guest');

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:id}', [PostController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard.layouts.main');
})->middleware('auth');


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'regs']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/posts', DashboardPostController::class);

Route::resource('/dashboard/components', DashboardComponentController::class)->middleware('is_admin');
Route::resource('/dashboard/components/post', DashboardComponentPostController::class)->middleware('is_admin');






 