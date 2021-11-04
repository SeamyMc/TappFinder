<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pub;
use App\Models\Tap;


class Beer extends Model
{
    use HasFactory;

    function pubs(){
    	return $this->hasManyThrough(Pub::class, Tap::class);
    }

    function taps(){
    	return $this->hasMany(Tap::class);
    }
 	
}
