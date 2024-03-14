<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Conference;
use App\Models\Division;
use App\Models\City;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Se obtienen los elementos de la tabla teams y se unen con la tabla conferences, la tabla divisions y la tabla cities.
        $teams = Team::join('conferences', 'teams.conference_id', '=', 'conferences.id')
            ->join('divisions', 'teams.division_id', '=', 'divisions.id')
            ->join('cities', 'teams.city_id', '=', 'cities.id')
            ->select('teams.*', 'conferences.conference_name', 'divisions.division_name', 'cities.city_name')
            ->get();
        //dd($teams);

        //Se retorna la vista con los equipos.
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
