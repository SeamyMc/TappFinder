<?php

namespace App\Http\Controllers;

use App\Models\Pint;
use Illuminate\Http\Request;

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
        return view('log-pint');
    }

    public function resolveRequiredStores(Request $request)
    {
        //If 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $pint = Pint::create($request);
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
