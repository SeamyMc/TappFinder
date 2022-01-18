<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use App\Models\Tap;
use App\Models\Beer;
use Illuminate\Http\Request;
use App\Http\Controllers\BeerController;
use App\Http\Resources\PubResource;
use GuzzleHttp\Client;

class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getPubs()
    {
        return PubResource::collection(Pub::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coords = $this->getCoords($request->postcode);
        $pub = Pub::firstOrCreate(
            ['name' => $request->name],
            ['chain' => $request->chain,
             'description' => $request->description, 
             'add1' => $request->add1,
             'add2' => $request->add2,
             'postcode' => $request->postcode,
             'city' => $request->city,
             'lat' => $coords[0],
             'long' => $coords[1],
             'image'=>$request->image]
        );

        return redirect()->route('pub.show', ['pub' => $pub->id]);
    }

    public function getServedBeers()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */#

    public function getPub($id)
    {
        return Pub::findOrFail($id);
    }

    public function getCoords($postcode)
    {

        $client = new Client();
        $response = $client->get('https://api.postcodes.io/postcodes/'.$postcode)->getBody()->getContents();
        $data = json_decode($response, true)["result"];

        $latitude = $data["latitude"];
        $longitude = $data["longitude"];        

        return [$latitude, $longitude];
    }

    public function getPubsNear(Request $request){
        $pubs = Pub::forPubsNear($request->lat, $request->long)->get();

        return $pubs;
    }

    public function show(Pub $pub)
    { 
        return view('pubs.show', ['pub' => $pub, 'category' => 'pub']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function edit(Pub $pub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pub $pub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pub $pub)
    {
        //
    }
}
