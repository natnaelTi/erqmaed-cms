<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/project', [App\Http\Controllers\HomeController::class, 'project'])->name('project');
Route::get('/p_detail', [App\Http\Controllers\HomeController::class, 'project_detail'])->name('p_detail');
Route::get('/blog_detail', [App\Http\Controllers\HomeController::class, 'blog_detail'])->name('blog_detail');

Auth::routes();


