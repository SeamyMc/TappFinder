<?php

namespace App\Http\Controllers;

use App\Models\Pint;
use Illuminate\Http\Request;
use App\Http\Controllers\TapController;

class PintController extends Controller
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
        return view('pints.create');
    }

    public function resolveRequiredStores(Request $request)
    {
        //If tap doesnt exist in table
            //Then add the tap

        //Either way, add the pint instance to the pints table
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pint  $pint
     * @return \Illuminate\Http\Response
     */
    public function show(Pint $pint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pint  $pint
     * @return \Illuminate\Http\Response
     */
    public function edit(Pint $pint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pint  $pint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pint $pint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pint  $pint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pint $pint)
    {
        //
    }
}
