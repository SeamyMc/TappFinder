<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pub;
use App\Models\Beer;

class Tap extends Model
{
    use HasFactory;

	function beer(){
    	return $this->belongsTo(Beer::class);
    }

	function pub(){
    	return $this->belongsTo(Pub::class);
    }

    

}
