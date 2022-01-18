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

            //Flute and Tank
            Tap::create([
                'beer_id' => 1,
                'pub_id' => 1,
            ]);

            //Crwys
            Tap::create([
                'beer_id' => 1,
                'pub_id' => 2,
            ]);
            Tap::create([
                'beer_id' => 8,
                'pub_id' => 2,
            ]);
            Tap::create([
                'beer_id' => 9,
                'pub_id' => 2,
            ]);

            //Oneills
            Tap::create([
                'beer_id' => 1,
                'pub_id' => 3
            ]);
            Tap::create([
                'beer_id' => 5,
                'pub_id' => 3,
            ]);
           Tap::create([
                'beer_id' => 7,
                'pub_id' => 3,
            ]);

           //The Heath
            Tap::create([
                'beer_id' => 1,
                'pub_id' => 4
            ]);
            Tap::create([
                'beer_id' => 5,
                'pub_id' => 4,
            ]);
            Tap::create([
                'beer_id' => 7,
                'pub_id' => 4,
            ]);
            Tap::create([
                'beer_id' => 9,
                'pub_id' => 4,
            ]);




            //Top of The Town
            Tap::create([
                'beer_id' => 1,
                'pub_id' => 9,
            ]);

            Tap::create([
                'beer_id' => 2,
                'pub_id' => 9,
            ]);

            Tap::create([
                'beer_id' => 4,
                'pub_id' => 9,
            ]);

            Tap::create([
                'beer_id' => 5,
                'pub_id' => 9,
            ]);
          
          


      //   for ($i=0; $i<10; $i++){
      //       $pub = $pubs->random();
      //       $beer = $beers->random();

    		// Tap::create([
    		//     'beer_id' => $beer->id,
    		//     'pub_id' => $pub->id,
    	 //    ]);
      //   }
    }
}
