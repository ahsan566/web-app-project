<?php

namespace App\Http\Controllers;

use \App\Team;
use \App\Player;
use \App\PlayerTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Alert;

class TeamController extends Controller
{

    public function index()
    {
      $teams = Team::all();
      return view('team.index',compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
      $team = new Team();
      $team->name = $request->name;
      $team->program = $request->program;
      $team->save();
      return redirect()->route('team.index')->with('message','team has been added successfully');
    }

    public function edit($id)
    {
      $team = Team::findOrFail($id);
      return view('team.edit', compact('team'));
    }

    public function show($id)
    {
      $players = Player::all();
      $team = Team::findOrFail($id);
      $player_team = PlayerTeam::where('team_id','=',$id)->get();
      return view('team.team_player',compact('players','team','player_team'));
    }

    public function update(Request $request, $id)
    {
      $team = Team::findOrFail($id);
      $team->name = $request->name;
      $team->program = $request->program;
      $team->save();
      return redirect()->route('team.index');
    }

    public function destroy($id)
    {
      Team::destroy($id);
      return redirect()->route('team.index');
    }
}
