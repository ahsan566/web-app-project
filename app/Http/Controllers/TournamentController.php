<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MatchController;
use App\Tournament;
use App\Team;
use App\Match;
use App\Venue;
use Illuminate\Http\Request;

class TournamentController extends Controller
{

    public function index()
    {
      $team = Team::all();
      $tournaments = Tournament::all();
      return view('tournament.index',compact('tournaments','team'));
    }

    public function create()
    {
        return view('tournament.create');
    }

    public function store(Request $request)
    {
        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->city = $request->city;
        $tournament->start_date = $request->start_date;
        $tournament->end_date = $request->end_date;
        $tournament->save();
        return redirect()->route('tournament.index')->with('message','tournament has been added successfully');
    }

    public function show($id)
    {
        $teams = Team::all();
        $venues = Venue::all();
        $matches = Match::where('tournament_id','=',$id)->get();
        $tournament = Tournament::findOrFail($id);
        return view('tournament.detail',compact('teams','venues','matches','tournament'));
    }

    public function edit($id)
    {
      $tournament = Tournament::findOrFail($id);
      return view('tournament.edit', compact('tournament'));

    }

    public function update(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->name = $request->name;
        $tournament->city = $request->city;
        $tournament->start_date = $request->start_date;
        $tournament->end_date = $request->end_date;
        $tournament->save();
        return redirect()->route('tournament.index')->with('message','tournament has been edited successfully');
    }

    public function destroy($id)
    {
        Tournament::destroy($id);
        return redirect()->route('tournament.index');
    }
}
