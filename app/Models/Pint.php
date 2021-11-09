<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tap;

class Pint extends Model
{
    use HasFactory;

    protected $fillable = ['tap_id', 'user_id', 'price', 'rating'];

    function pints(){
    	return $this->belongsTo(Tap::class);
    }
}
