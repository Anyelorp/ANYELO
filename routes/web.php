<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('arabe',function(){
    return "estas con el arabe";
});
Route::view('AMED','arabe');

Route::get('YEFELSON',function(){
    return "estas con el arabe";
});
Route::view('hola','YEFELSON');

Route::get('cristhiano',function(){
    return 'halamadrid';
});
Route::view('cr7','cristhiano');
Route::get('lamborgini',function(){
    return 'hola';
});

route::view('free','lamborgini');

Route::get('menu',function(){
    return view('menu');
})->name('menu');

route::view('yordi','menu');

