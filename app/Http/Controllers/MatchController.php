<?php

namespace App\Http\Controllers;
use App\Match;
use App\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $matches = Match::all();
      return view('tournament.detail',compact('matches'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

      $match = new Match();
      $match->team_1_id = $request->team_1_id;
      $match->team_2_id = $request->team_2_id;
      $match->venue_id = $request->venue_id;
      $match->match_date = $request->match_date;
      $match->tournament_id = $request->tournament_id;
      $match->save();
      return redirect()->route('tournament.show',['id'=>$request->tournament_id])->with('message','Match has been added successfully');
    }

    public function show($id)
    {
      echo "hello";
    }

    public function edit($id)
    {
      $match = Match::findOrFail($id);
      $teams = Team::findOrFail($id);
      echo "hello";
      return view('match.edit', compact('match','teams'));
    }

    public function update(Request $request, $id)
    {
      $match = Match::findOrFail($id);
      $match->team_1_id = $request->team_1_id;
      $match->team_2_id = $request->team_2_id;
      $match->venue_id = $request->venue_id;
      $match->match_date = $request->match_date;
      $match->save();
      return redirect()->route('tournament.detail')->with('message','Match has been updated successfully');
    }

    public function destroy($id)
    {
      Match::destroy($id);
      return redirect()->route('tournament.show',['id'=>request()->tournament_id])->with('message','Match has been deleted successfully');;
    }
}
