<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beer;
use Faker\Generator;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
  
  		Beer::truncate();
		for ($i=0; $i<50; $i++){
			
			// Beer::create([
			//     'name' => $faker->word(),
			//     'brewery' =>  $faker->sentence(),
			//     'abv' =>  0.00,
			//     'image' => 'https://placebear.com/g/200/300',
			//     'description' =>  $faker->sentence(),	    
		 //    ]);	
		}

		Beer::create([
		    'name' => 'Guinness',
		    'brewery' =>  'Diageo',
		    'abv' =>  4.1,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fqz.com%2Fwp-content%2Fuploads%2F2017%2F05%2Fguinness-beer-will-soon-be-vegan.jpeg%3Fquality%3D80%26strip%3Dall%26w%3D1600&f=1&nofb=1",
		    'description' =>  "Stout",	    
	    ]);	


		Beer::create([
		    'name' => 'Smithwicks',
		    'brewery' =>  'Diageo',
		    'abv' =>  4.5,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fca%2Fc9%2Fca%2Fcac9ca3131568789bd65b3ef21a79453.jpg&f=1&nofb=1",
		    'description' =>  "Irish Red Ale",	    
	    ]);	


		Beer::create([
		    'name' => 'San Miguel',
		    'brewery' =>  'San Miguel Brewery',
		    'abv' =>  5.0,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.PUxoNx2D67fppGQxVW1YpQHaJ4%26pid%3DApi&f=1",
		    'description' =>  "Lager",	    
	    ]);	

	    Beer::create([
		    'name' => 'Tennants',
		    'brewery' =>  'Wellpark Brewery',
		    'abv' =>  4.0,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2Faf%2F13%2F96%2Faf139654d7fee3af558ea9b047bf8b28--beer-drinks.jpg&f=1&nofb=1",
		    'description' =>  "Lager",	    
	    ]);	

	    Beer::create([
		    'name' => 'Hop House 13',
		    'brewery' =>  'Diageo',
		    'abv' =>  4.6,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fdiscoverbundoran.com%2Fwp-content%2Fuploads%2F2017%2F04%2FBrennans-sisters_Bundoran_HH13_low-res.jpg&f=1&nofb=1",
		    'description' =>  "Lager",	    
	    ]);	

	    Beer::create([
		    'name' => 'Birra Moretti',
		    'brewery' =>  'Heineken',
		    'abv' =>  4.6,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fdrinks.theflapper.co.uk%2Fwp-content%2Fuploads%2F2017%2F12%2F41Xx3ALslkL-1.jpg&f=1&nofb=1",
		    'description' =>  "Lager",	    
	    ]);

	    Beer::create([
		    'name' => 'Punk IPA',
		    'brewery' =>  'Brewdog',
		    'abv' =>  5.6,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcasksweden.se%2Fwp-content%2Fuploads%2F2019%2F04%2Fbrewdog-punk-ipa.jpg&f=1&nofb=1",
		    'description' =>  "Lager",	    
	    ]);	

	    Beer::create([
		    'name' => 'Stella Artois',
		    'brewery' =>  'Stella',
		    'abv' =>  4.6,
		    'image' => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.92iQTB9MNVsHUPvplFUN4AHaE8%26pid%3DApi&f=1",
		    'description' =>  "Lager",	    
	    ]);	


    }
}
