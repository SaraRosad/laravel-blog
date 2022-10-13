<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::prefix('user/home')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/show/{post_id}', [App\Http\Controllers\User\PostUserController::class, 'show']);

});

Route::prefix('user')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('posts', [\App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [\App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [\App\Http\Controllers\Admin\PostController::class, 'addPost']);
    Route::get('post/{post_id}', [\App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [\App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [\App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('tag', [\App\Http\Controllers\Admin\TagsController::class, 'index']);
    Route::get('add-tag', [\App\Http\Controllers\Admin\TagsController::class, 'create']);
    Route::post('add-tag', [\App\Http\Controllers\Admin\TagsController::class, 'store']);
    Route::get('tag/{tag_id}', [\App\Http\Controllers\Admin\TagsController::class, 'edit']);
    Route::put('update-tag/{tag_id}', [\App\Http\Controllers\Admin\TagsController::class, 'update']);
    Route::get('delete-tag/{tag_id}', [\App\Http\Controllers\Admin\TagsController::class, 'destroy']);
});
