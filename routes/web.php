<?php

use Illuminate\Support\Facades\File;
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

Route::name('app.')->group(
    function () {
        Route::get('/',function (){
            return "Hello World";
        } )->name('home');
    }
);

//sitemap
Route::get('/sitemap.xml', function (){
    return response(File::get(public_path('sitemap.xml')))->header('Content-Type', 'text/xml');
})->name('sitemap');
//cgu
Route::get('/cgu', function (){
    return response(File::get(public_path('cgu.html')))->header('Content-Type', 'text/html');
})->name('cgu');
