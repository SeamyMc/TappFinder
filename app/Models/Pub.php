<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beer;
use App\Models\Tap;


class Pub extends Model
{
    use HasFactory;


    function beers(){
		return $this->hasManyThrough(Beer::class, Tap::class);
    }

    function taps(){
    	return $this->hasMany(Tap::class);
    }
}
