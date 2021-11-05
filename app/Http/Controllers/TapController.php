<?php

namespace App\Http\Controllers;

use App\Models\Tap;
use Illuminate\Http\Request;

class TapController extends Controller
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

    public function checkExists($beer_id, $pub_id)
    {
        $tapIds = Tap::all()->pluck('beer_id', 'pub_id');

        if ta
        
        return $tapIds->contains($beer_i);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Tap  $tap
     * @return \Illuminate\Http\Response
     */
    public function show(Tap $tap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tap  $tap
     * @return \Illuminate\Http\Response
     */
    public function edit(Tap $tap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tap  $tap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tap $tap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tap  $tap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tap $tap)
    {
        //
    }
}
