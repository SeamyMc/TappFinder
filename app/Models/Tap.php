<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pub;
use App\Models\Beer;
use App\Models\Pint;


class Tap extends Model
{
    use HasFactory;
    protected $fillable = ['pub_id', 'beer_id'];

	function beer(){
    	return $this->belongsTo(Beer::class);
    }

	function pub(){
    	return $this->belongsTo(Pub::class);
    }

    function pint(){
    	return $this->hasMany(Pint::class);
    }

    function scopeForBeerSoldIn($query, $beer, $pub){
    	return $query->where('beer_id', $beer)->where('pub_id', $pub);
    }

    

}
