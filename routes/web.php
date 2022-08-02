<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FrontendController;

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
//     return view('index');
// });
Route::get('/', [FrontendController::class, 'index']);

// some problem show in editor
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// SliderController Routes
Route::get('/add/slider', [SliderController::class, 'addslider'])->name('addslider');
Route::post('/add/slider/post', [SliderController::class, 'addsliderpost'])->name('addsliderpost');
Route::get('slider/list', [SliderController::class, 'listSlider'])->name('sliderList');

