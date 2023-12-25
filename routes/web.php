<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kontak;

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
//Route::get('/kontak', [Kontak::class, 'index']);
Route::resource('kontak',Kontak::class); //tambahkan baris ini
Route::get('/', function () {
    return view('index');
});
Route::get('/halaman-kedua', function () {
    return view('halamandua');
});