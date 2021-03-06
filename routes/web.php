<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CommentController;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Struktur;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/page', [PageController::class, 'index'])->name('page');
Route::post('/post/{post}', [PostController::class, 'insertdata'])->name('InsertData');
Route::post('/page/{page}', [pageController::class, 'insertcoment'])->name('Insertcoment');
Route::get('/post/{post}', [PostController::class, 'show'])->name('PostStage');
Route::get('/post-category/{category}', [PostController::class, 'store'])->name('post.category');
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
Route::get('/galery/{slug}', [GaleryController::class, 'show'])->name('galery.show');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact', [ContactUsController::class, 'sendemail'])->name('contact.send');
Route::post('/sub', [ContactUsController::class, 'Subscribe'])->name('sub.send');
Route::get('/struktur/{slug}', [PageController::class, 'Struktur'])->name('struktur');
Route::get('/leader', [PageController::class, 'leader'])->name('leader');