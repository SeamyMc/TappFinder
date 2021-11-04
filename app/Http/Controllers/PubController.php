<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use App\Models\Tap;
use App\Models\Beer;
use Illuminate\Http\Request;
use App\Http\Controllers\BeerController;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function show($id)
    { 
        $category = "pub";
        $pub = Pub::findOrFail($id);
        $taps = Tap::where('pub_id', "$pub->id")->pluck('beer_id')->toArray();
        $beers = Beer::WhereIn('id', array_keys($taps))->get();
        return view('info', ['pub' => $pub, 'beers' => $beers, 'category' => 'pub']);
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
