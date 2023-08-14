<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

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

// index - Show all listings
Route::get('/', [ListingController::class, 'index']);

// create - Show form to create new listing
Route::get('/listings/create', [ListingController::class, 'create']);

// store - Store new listing
Route::post('/listings', [ListingController::class, 'store']);

// edit - Show form to edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update - Update listing
Route::put('//listings/{listing}', [ListingController::class, 'update']);

// destroy - Delete listing  
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//place in the last
// show - Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);