<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/article', 'App\Http\Controllers\ArticleController@index')->name('article.index');
Route::delete('/article/{id}', 'App\Http\Controllers\ArticleController@destroy')->name('article.destroy');
Route::get('/article/create', 'App\Http\Controllers\ArticleController@create')->name('article.create');
Route::post('/article/create', 'App\Http\Controllers\ArticleController@storeCreate')->name('article.storeCreate');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
