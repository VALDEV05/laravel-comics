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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {

    $comics = config('db.data');
    /* ddd($comics); */


    return view('comics.index', compact('comics'));
   /* return 'page comics'; */

})->name('comics');


Route::get('/characters', function () {
   /*  return view('characters'); */
   return 'page characters';
})->name('characters');

Route::get('/movies', function () {
   /*  return view('movies'); */
   return 'page movies';
})->name('movies');

Route::get('/tv', function () {
   /*  return view('tv'); */
   return 'page tv';
})->name('tv');

Route::get('/games', function () {
   /*  return view('games'); */
   return 'page games';
})->name('games');

Route::get('/collectibles', function () {
   /*  return view('collectibles'); */
   return 'page collectibles';
})->name('collectibles');

Route::get('/videos', function () {
   /*  return view('videos'); */
   return 'page videos';
})->name('videos');

Route::get('/fans', function () {
   /*  return view('fans'); */
   return 'page fans';
})->name('fans');

Route::get('/news', function () {
   /*  return view('news'); */
   return 'page news';
})->name('news');

Route::get('/shop', function () {
   /*  return view('shop'); */
   return 'page shop';
})->name('shop');