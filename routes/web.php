<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PintController;
use App\Http\Controllers\TapController;
use \Illuminate\Http\Request;

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

//Basic Routes

Route::get('/', function () {
   return redirect('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', function (){
	return view('home.home');
})->name('home');

Route::get('/about', function (){
	return view('about.about');
});

Route::get('/contact', function (){
	return view('contact.contact');
});


//Show Routes

Route::get('/pub/{pub}', [PubController::class, 'show'])->name('pub.show');
Route::get('/beer/{beer}', [BeerController::class, 'show'])->name('beer.show');
Route::get('/pints/create', [PintController::class, 'create'])->name('pints.create');
Route::post('/pints/store', [PintController::class, 'store'])->name('pints.store');

//Search Routes

Route::get('/search', [SearchController::class, 'search']);


//Test Routes
Route::get('/checkexists/{pubId}/{beerId}', [TapController::class, 'checkExists']);

require __DIR__.'/auth.php';
