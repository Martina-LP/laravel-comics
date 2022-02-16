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

// ROUTE COMICS

Route::get('/comics', function () {

    $comics = config('comic.data');
    return view('comics.index', compact('comics'));

})->name('comics');


Route::get('comics/{id}', function ($id) {

    $comics = config('comic.data');
    // dd($comics[$id]);
    // return "Show comic with id $id";


    if(is_numeric($id) && $id < count($comics) && $id >= 0 ) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    }else {
        abort(404);
    }

})->name('comic');

// END ROUTE COMICS

// EXISTING BLADE COMPONENTS

Route::get('/characters', function () {

    return view('characters');
})->name('characters');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');


Route::get('/tv', function () {

    return view('tv');
})->name('tv');

// END EXISTING BLADE COMPONENTS

Route::get('/games', function () {

    return view('games');
})->name('games');


Route::get('/videos', function () {

    return view('videos');
})->name('videos');


Route::get('/fans', function () {

    return view('fans');
})->name('fans');

Route::get('/news', function () {

    return view('news');
})->name('news');

Route::get('/shop', function () {

    return view('shop');
})->name('shop');
