<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pub;
use Faker\Generator;


class PubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
  
  		Pub::truncate();
		for ($i=0; $i<50; $i++){
			// Pub::create([
			//     'name' => $faker->word(),
			//     'chain' =>  $faker->sentence(),
			//     'description' =>  $faker->sentence(),
			//     'image' => 'https://placebear.com/200/300',
			//     'add1' =>  $faker->sentence(),
			//     'add2' =>  $faker->sentence(),
			//     'city' =>  $faker->city(),
			//     'postcode' =>  $faker->sentence(),		    
		 //    ]);	
		}
		Pub::create([
		    'name' => 'Flute and Tankard',
		    'chain' =>  'Independent',
		    'description' =>  'Small pub just off Queen Street',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Yhr66QxZn_qto-dExG0i0AHaEK%26pid%3DApi&f=1',
		    'add1' =>  '4 Windsor Place',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF10 3BX',		    
	    ]);		

	    Pub::create([
		    'name' => 'Crwys',
		    'chain' =>  'Brains',
		    'description' =>  'Large pub on Crwys road. Live sport and food.',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fc8.alamy.com%2Fcomp%2FA7GTPF%2Fthe-crwys-crwys-rd-one-of-cardiff-s-traditional-pubs-still-with-its-A7GTPF.jpg&f=1&nofb=1',
		    'add1' =>  '34 Crwys Road',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF24 4NN',		    
	    ]);

	    Pub::create([
		    'name' => 'Top of The Town',
		    'chain' =>  'Independent',
		    'description' =>  'Top craic, top sports, top of the town',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs0.geograph.org.uk%2Fgeophotos%2F06%2F18%2F69%2F6186930_bbc2cfc8.jpg&f=1&nofb=1',
		    'add1' =>  '13 John Street',
		    'add2' =>  '',
		    'city' =>  'Omagh',
		    'postcode' =>  'BT78 1DW',		    
	    ]);	

	    Pub::create([
		    'name' => 'The Potters',
		    'chain' =>  'Independent',
		    'description' =>  'The only good pub in Newport',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia-cdn.tripadvisor.com%2Fmedia%2Fphoto-s%2F0f%2Fef%2F5e%2F22%2Fpotters-pub-newport.jpg&f=1&nofb=1',
		    'add1' =>  '22-24 Upper Dock Street',
		    'add2' =>  '',
		    'city' =>  'Newport',
		    'postcode' =>  'NP20 1DL',		    
	    ]);		
    	
    }
}
