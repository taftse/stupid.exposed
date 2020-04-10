<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('osd.xml',function (){
    return 'test';
});
Route::get('language/{local}',[\SKE\Language\Http\Controllers\LanguageController::class,'handle'])->name('translations');

Route::get('terms',function (){
    return 'add some term of service';
})->name('tos');

Route::view('{any?}', 'spa')->where('any', '.*')->name('home');



