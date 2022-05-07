<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// show all listings
Route::get('/', [ListingController::class, 'index']);

// show form to create ne listing
Route::get('/listings/create', [ListingController::class, 'create']);

//store new listing
Route::post('/listings', [ListingController::class, 'store']);

// show edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Deete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//show single listing
// cara yg baik -- type bject class -- selain yg ada di listing hasil 404
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// --------------------------------
//User Registration
Route::get('/register', [UserController::class, 'create']);

//creat new User (store)
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout']);

//user login
Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);