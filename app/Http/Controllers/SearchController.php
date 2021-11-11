<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\PubController;
use App\Models\Beer;
use App\Models\Pub;
use App\Models\Tap;

class SearchController extends Controller
{
	private function getResolvers() {
		return [	
			'taps' => function ($searchQ, $cityQ, $lat, $long) {
				$pubs = Cache::remember("Taps:".$searchQ."in".$cityQ, 3, function() use ($searchQ, $cityQ, $lat, $long){
					$beerIds = Beer::where('name','LIKE',"$searchQ%")->pluck('id');
					$pubs = Pub::whereHas('taps', function (Builder $dbquery) use ($beerIds, $lat, $long){
						$dbquery->whereIn('beer_id', $beerIds);
					})->where('city','LIKE',"$cityQ%")->forPubsNear($lat, $long, 10000)->orderBy('name')->get();
					return $pubs;
				});
		
				
				return $pubs;
			},
			'pubs' => function ($searchQ, $cityQ, $lat, $long) {
				$pubs = Cache::remember("Pubs:".$searchQ."in".$cityQ, 3, function() use ($searchQ, $cityQ, $lat, $long){
					return Pub::where('name','LIKE',"$searchQ%")->where('city','LIKE',"$cityQ%")->forPubsNear($lat, $long, 10000)->orderBy('name')->get();
				});

				return $pubs;
			},
			'beers' => function ($searchQ) {
				$beers = Cache::remember("Beers:".$searchQ, 3, function() use ($searchQ){
					return Beer::where('name','LIKE',"$searchQ%")->withCount('taps')->orderByDesc('taps_count')->get();
				});
				return $beers;
			}
		];
	}

	private function getResolver($criteria) {
		return $this->getResolvers()[$criteria];
	}

	private function resolveItems($criteria, $searchQ, $cityQ, $lat, $long) {
		$resolver = $this->getResolver($criteria);
		return $resolver($searchQ, $cityQ, $lat, $long);
	}

	public function search(Request $request){

		$criteria = $request->input('criteria');
		$searchQ = $request->input('searchQ');
		$cityQ = $request->input('cityQ');
		$items = $this->resolveItems($criteria, $searchQ, $cityQ, $request->lat, $request->long);
		

		return view('search.search', compact('items', 'criteria', 'searchQ', 'cityQ'));
	}

}
