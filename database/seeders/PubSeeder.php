<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pub;
use Faker\Generator;
use GuzzleHttp\Client;
use App\Http\Controllers\PubController;


class PubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run(Generator $faker)
    {
      	$pubController = new PubController();
  		Pub::truncate();
		
		$coords = $pubController->getCoords("CF10 3BX");
		Pub::create([
		    'name' => 'Flute and Tankard',
		    'chain' =>  'Independent',
		    'description' =>  'Small pub just off Queen Street',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Yhr66QxZn_qto-dExG0i0AHaEK%26pid%3DApi&f=1',
		    'add1' =>  '4 Windsor Place',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF10 3BX',
		    'lat' => $coords[0],
		    'long' => $coords[1]	    
	    ]);		

		$coords = $pubController->getCoords("CF24 4NN");
	    Pub::create([
		    'name' => 'Crwys',
		    'chain' =>  'Brains',
		    'description' =>  'Large pub on Crwys road. Live sport and food.',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fc8.alamy.com%2Fcomp%2FA7GTPF%2Fthe-crwys-crwys-rd-one-of-cardiff-s-traditional-pubs-still-with-its-A7GTPF.jpg&f=1&nofb=1',
		    'add1' =>  '34 Crwys Road',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF24 4NN',
		    'lat' => $coords[0],
		    'long' => $coords[1]	 		    
	    ]);

	   	$coords = $pubController->getCoords("CF10 1DW");
	    Pub::create([
		    'name' => 'Oneills',
		    'chain' =>  'Oneills',
		    'description' =>  'A fake Irish bar',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.-7rYVP-rDrRT15EfrVFX1wHaEK%26pid%3DApi&f=1',
		    'add1' =>  '85-87 St. Mary Street',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF10 1DW',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);	




		$coords = $pubController->getCoords("CF14 3LW");
	    Pub::create([
		    'name' => 'The Heath',
		    'chain' =>  'Brains',
		    'description' =>  'Not a hospital',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.4qOuIZ5DGtgTvf9zno9kRgHaGf%26pid%3DApi&f=1',
		    'add1' =>  '2 Whitchurch Road',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF14 3LW',
		    'lat' => $coords[0],
		    'long' => $coords[1]			    
	    ]);


		$coords = $pubController->getCoords("CF10 1DD");
	    Pub::create([
		    'name' => 'Tiny Rebel',
		    'chain' =>  'Tiny Rebel',
		    'description' =>  'Expensive but tasty',
		    'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/d2/fa/7d/tiny-rebel-cdf.jpg',
		    'add1' =>  '25 Westgate Street',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'CF10 1DD',
		    'lat' => $coords[0],
		    'long' => $coords[1]			    
	    ]);

	    $coords = $pubController->getCoords("NP20 1FX");
	    Pub::create([
		    'name' => 'Tiny Rebel',
		    'chain' =>  'Tiny Rebel',
		    'description' =>  'Expensive but tasty, and in Newport',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia-cdn.tripadvisor.com%2Fmedia%2Fphoto-s%2F19%2Fde%2F8e%2F16%2Fimg-20191025-140722-1.jpg&f=1&nofb=1',
		    'add1' =>  '22-23 High Street',
		    'add2' =>  '',
		    'city' =>  'Cardiff',
		    'postcode' =>  'NP20 1FX',
		    'lat' => $coords[0],
		    'long' => $coords[1]			    
	    ]);	


		$coords = $pubController->getCoords("NP20 1DL");
	    Pub::create([
		    'name' => 'The Potters',
		    'chain' =>  'Independent',
		    'description' =>  'The only good pub in Newport',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia-cdn.tripadvisor.com%2Fmedia%2Fphoto-s%2F0f%2Fef%2F5e%2F22%2Fpotters-pub-newport.jpg&f=1&nofb=1',
		    'add1' =>  '22-24 Upper Dock Street',
		    'add2' =>  '',
		    'city' =>  'Newport',
		    'postcode' =>  'NP20 1DL',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);

		$coords = $pubController->getCoords("NP20 1JD");
	    Pub::create([
		    'name' => 'Pen and Wig',
		    'chain' =>  'JW Bassett',
		    'description' =>  'Not as good as the one in Cardiff',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.O_2ju5xvb5a4N1KX_gR-qQHaFj%26pid%3DApi&f=1',
		    'add1' =>  '2-24 Stow Hill',
		    'add2' =>  '',
		    'city' =>  'Newport',
		    'postcode' =>  'NP20 1JD',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);

		$coords = $pubController->getCoords("BT78 1DW");
	    Pub::create([
		    'name' => 'Top of The Town',
		    'chain' =>  'Independent',
		    'description' =>  'Top craic, top sports, top of the town',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs0.geograph.org.uk%2Fgeophotos%2F06%2F18%2F69%2F6186930_bbc2cfc8.jpg&f=1&nofb=1',
		    'add1' =>  '13 John Street',
		    'add2' =>  '',
		    'city' =>  'Omagh',
		    'postcode' =>  'BT78 1DW',
		    'lat' => $coords[0],
		    'long' => $coords[1]			    
	    ]);

	    $coords = $pubController->getCoords("BT78 1DW");
	    Pub::create([
		    'name' => 'McCanns',
		    'chain' =>  'Independent',
		    'description' =>  'The second best bar in Omagh',
		    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.NmdWkXiWiJaPYHQ4O7WcVAHaFj%26pid%3DApi&f=1',
		    'add1' =>  '7 John Street',
		    'add2' =>  '',
		    'city' =>  'Omagh',
		    'postcode' =>  'BT78 1DW',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);	

	    $coords = $pubController->getCoords("EH2 1EP");
	    Pub::create([
		    'name' => 'The Queens Arms',
		    'chain' =>  'Independent',
		    'description' =>  'I dunno, Ive never been to Edinburgh',
		    'image' => 'https://media-cdn.tripadvisor.com/media/photo-f/14/be/6d/1f/20180920-215558-largejpg.jpg',
		    'add1' =>  '49 Frederick Street',
		    'add2' =>  '',
		    'city' =>  'Edinburgh',
		    'postcode' =>  'EH2 1EP',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);

	    $coords = $pubController->getCoords("BT7 2EB");
	    Pub::create([
		    'name' => 'Hatfield House',
		    'chain' =>  'Independent',
		    'description' =>  'STUDENTS',
		    'image' => 'https://media-cdn.tripadvisor.com/media/photo-f/14/be/6d/1f/20180920-215558-largejpg.jpg',
		    'add1' =>  '130 Ormeau Road',
		    'add2' =>  '',
		    'city' =>  'Belfast',
		    'postcode' =>  'BT7 2EB',
		    'lat' => $coords[0],
		    'long' => $coords[1]		    
	    ]);			
    	
    }
}
