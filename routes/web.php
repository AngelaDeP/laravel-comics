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
});

Route::get('/comics', function () {

    $comics = config('comics');

    return view('comics', ['fumetti' => $comics]);
})->name('comics');

Route::get('/product/{comic_id}', function ($comic_id) {

    $comics = config('comics');
    
    if (is_numeric($comic_id) && $comic_id >= 0 && $comic_id < count($comics)) {

        $productComic = $comics[$comic_id];

        return view('product', ['fumetto' => $productComic]);

    } else {
        abort(404);
    }

})->name('product');