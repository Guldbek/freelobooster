<?php

namespace App\Http\Controllers;

use App\Booster_group;
use Illuminate\Http\Request;

class BoosterGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $booster_groups = Booster_group::with('rankTo', 'rankFrom')->get();
      return view('admin.boosters.groups', compact('booster_groups'));

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
     * @param  \App\Booster_group  $booster_group
     * @return \Illuminate\Http\Response
     */
    public function show(Booster_group $booster_group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booster_group  $booster_group
     * @return \Illuminate\Http\Response
     */
    public function edit(Booster_group $booster_group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booster_group  $booster_group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booster_group $booster_group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booster_group  $booster_group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booster_group $booster_group)
    {
        //
    }
}
