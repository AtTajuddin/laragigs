<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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
    return view('home', [
        'heading' => 'Laragigs ini pasing data from route',
        'listings' => Listing::all()
    ]);
});

// cara yg baik -- type bject class -- selain yg ada di listing hasil 404
Route::get('/search/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

//cara ke 2 perbaikan cara ke 1 -- menghendle error jika $id tidak ada
// Route::get('/search/{id}', function ($id) {
//     $listing = Listing::find($id);
//     // dd($listing);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });

//cara ke 1 -- muncul error jika diketik/isi url $id gak ada
// Route::get('/search/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

//=======================================================;
// Route::get('hai', function () {
//     return response('<h1> ini title</h1>', 200)
//         ->header('Content-Type', 'text plain')
//         ->header('my', 'man');
// });

// Route::get('about', function () {
//     return view('about');
// });

// Route::get('/naon/{id}', function ($id) {
//     return response('naonwehah' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     return response($request->nama . ' ' . $request->city);
// });

// Route::post('post/{id}', function ($id) {
//     return response(
//         [
//             'mypost' => [
//                 'akuh' => 'ini',
//                 'siapa' => 'coba',
//             ]
//         ]
//     );
// });