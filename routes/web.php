<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/senitradisi', function () {
    return view('senitradisi');
});
Route::get('/batik', function () {
    return view('batik');
});
Route::get('/bahasa', function () {
    return view('bahasa');
});
Route::post('/translate', [TranslateController::class, 'translate'])->name('translate');