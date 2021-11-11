<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PintController;
use App\Http\Controllers\TapController;
use \Illuminate\Http\Request;
use App\Models\User;
use App\Models\Beer;
use App\Models\Pint;
use App\Models\Pub;
use App\Mail\Emailer;


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

if (app()->environment('local'))
	Route::get('phpinfo', function () {
		phpinfo();
	});

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

Route::get('/mail12345', function() {
	$beer = Beer::first();
	$user = User::first();
	Mail::to(User::first())->send(new Emailer($beer, $user));

});


//Show Routes

Route::get('/pub/{pub}', [PubController::class, 'show'])->name('pub.show');
Route::get('/beer/{beer}', [BeerController::class, 'show'])->name('beer.show');

//Insert Routes

Route::middleware('can:create,' . Pint::class)->get('/pints/create', [PintController::class, 'create'])->name('pints.create');

Route::middleware('can:create,' . Pint::class)->get('/pints/store', [PintController::class, 'store'])->name('pints.store');

Route::middleware('can:create,' . Beer::class)->get('/beers/create', [BeerController::class, 'create'])->name('beers.create');
Route::middleware('can:create,' . Beer::class)->get('/beers/store', [BeerController::class, 'store'])->name('beers.store');

Route::middleware('can:create,' . Pub::class)->get('/pubs/create', [PubController::class, 'create'])->name('pubs.create');
Route::middleware('can:create,' . Pub::class)->get('/pubs/store', [PubController::class, 'store'])->name('pubs.store');

//Search Routes

Route::get('/search', [SearchController::class, 'search']);


//Test Routes
//Route::get('/checkexists/{pubId}/{beerId}', [TapController::class, 'checkExists']);

require __DIR__.'/auth.php';
