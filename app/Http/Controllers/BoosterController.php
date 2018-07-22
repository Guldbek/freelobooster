<?php

namespace App\Http\Controllers;

use App\Booster;
use Illuminate\Http\Request;

class BoosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boosters = Booster::with('user', 'boosterGroup')->get();
        return view('admin.boosters.boosters', compact('boosters'));

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
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function show(Booster $booster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function edit(Booster $booster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booster $booster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booster $booster)
    {
        //
    }
}
