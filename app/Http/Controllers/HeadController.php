<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use App\Models\Head;
use App\Models\AboutUs;
use App\Models\Concept;
use App\Models\menu;

use Illuminate\Http\Request;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',[
            "user"=> User::all(),
            "head"=> Head::first(),
            "about"=>AboutUs::first(),
            "concept"=>Concept::all(),
            "menu"=>menu::all(),
            "team"=>Team::all(),
        ]);
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
     * @param  \App\Models\Head  $Head
     * @return \Illuminate\Http\Response
     */
    public function show(Head $Head)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Head  $Head
     * @return \Illuminate\Http\Response
     */
    public function edit(Head $Head)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Head  $Head
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Head $Head)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Head  $Head
     * @return \Illuminate\Http\Response
     */
    public function destroy(Head $Head)
    {
        //
    }
}
