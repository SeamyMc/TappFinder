<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tap;
use App\Models\Beer;
use App\Models\Pub;

class TapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        Tap::truncate();
        $pubs = Pub::all();
        $beers = Beer::all();


        for ($i=0; $i<10; $i++){
            $pub = $pubs->random();
            $beer = $beers->random();

    		Tap::create([
    		    'beer_id' => $beer->id,
    		    'pub_id' => $pub->id,
    	    ]);
        }
    }
}
