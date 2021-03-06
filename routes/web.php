<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\CurrentUrlController;
use Illuminate\Http\Request;

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

Route::view('/', 'main')->name('main');

Route::controller(UrlController::class)->group(function () {
    Route::get('/urls', 'index')->name('urls.index');
    Route::post('/urls', 'store')->name('urls.post');
    Route::get('/urls/{id}', 'indexWithId')->name('urls.id');
    Route::post('/urls/{id}/checks', 'check')->name('url.check');
});
