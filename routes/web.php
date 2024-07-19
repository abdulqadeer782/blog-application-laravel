<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/blog/{id}', [HomeController::class, 'viewBlog'])->name('blog.show');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blog.index');


Route::middleware('auth')->group(function () {
    Route::post('/blog/{id}/comment', [HomeController::class, 'addComment'])->name('blog.comment');
});

Route::middleware('auth')->prefix('user')->group(function () {

    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);

    // userss
    Route::get('users', [UserController::class, 'index'])->name('users.index');
});

require __DIR__ . '/auth.php';
