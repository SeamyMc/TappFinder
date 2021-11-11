<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;
use App\Http\Controllers\BeerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pubs', [PubController::class, 'getPubs'])->name('api.pubs.index');
Route::get('/beers', [BeerController::class, 'apiIndex'])->name('api.beers.index');
Route::get('/pubs/pubsnear/', [PubController::class, 'getPubsNear'])->name('api.pubs.near');