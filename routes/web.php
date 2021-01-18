<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GaleryController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('login', function () {
    return view('login.index');
});*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [PageController::class, 'home']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::get('/page', [PageController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);
Route::get('/galery', [GaleryController::class, 'index']);
Route::get('/galery/{slug}', [GaleryController::class, 'show']);


