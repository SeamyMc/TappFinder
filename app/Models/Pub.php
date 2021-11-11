<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beer;
use App\Models\Tap;


class Pub extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'chain', 
	'description', 'add1', 'add2', 'postcode', 'city', 'image'];


    function beers(){
		return $this->hasManyThrough(Beer::class, Tap::class);
    }

    function taps(){
    	return $this->hasMany(Tap::class);
    }

   public function scopeForPubsNear($query, $lat, $lon, $radius = 1) {

     $haversine = "(6371 * acos(cos(radians($lat)) 
                     * cos(radians(pubs.lat)) 
                     * cos(radians(pubs.long) 
                     - radians($lon)) 
                     + sin(radians($lat)) 
                     * sin(radians(pubs.lat))))";
     return $query
        ->select() //pick the columns you want here.
        ->selectRaw("{$haversine} AS distance")
        ->whereRaw("{$haversine} < ?", [$radius]);
	}
}
