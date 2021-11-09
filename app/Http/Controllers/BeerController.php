<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Tap;
use App\Models\Pub;
use Illuminate\Http\Request;
use App\Http\Resources\BeerResource;

class BeerController extends Controller
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

    public function apiIndex()
    {
        return BeerResource::collection(Beer::all());
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('beers.show', ['beer' => Beer::findOrFail($id), 'category' => 'beer']);
    }

    public function getBeers($query)
    {
        $items = ['items' => Beer::where('name','LIKE','%'.$query.'%')->get()];
        return $items;
    }

    public function getBeersByPub($pub)
    {
        $tapIds = Tap::where('pub_id', "$pub->id")->pluck('id');
        $beers = ['beers' => Beer::WhereIn('id','$tapIds')->get()];
        return $tapIds;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        //
    }
}
