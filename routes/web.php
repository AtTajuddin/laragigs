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
    return view('welcome');
});

Route::get('hai', function () {
    return response('<h1> ini title</h1>', 200)
        ->header('Content-Type', 'text plain')
        ->header('my', 'man');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/naon/{id}', function ($id) {
    return response('naonwehah' . $id);
})->where('id', '[0-9]+');

Route::post('post/{id}', function ($id) {
    return response(
        [
            'mypost' => [
                'akuh' => 'ini',
                'siapa' => 'coba',
            ]
        ]
    );
});