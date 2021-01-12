<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class ,'home']);
Route::get('/blog', [PageController::class ,'blog']);
Route::get('/page', [PageController::class ,'page']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
