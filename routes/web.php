<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/allBlogs', [BlogPageController::class, 'index']);
Route::get('/showBlog/{blog}', [BlogPageController::class, 'show']);

Auth::routes(['register'=>false]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('blogs',BlogController::class);
Route::resource('users',UserController::class);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

