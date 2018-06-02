<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\PlayerTeam;

class PlayerTeamController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

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
    //dd($request);
    // $p_team = new PlayerTeam();
    // $p_team->player_id = $request->player_id;
    // $p_team->team_id = $request->team_id;
    // $p_team->save();
    // return redirect()->route('team.show',['id'=>$request->team_id]);

    $allplayers = [];
    $tests = [];
    $tests = $request->player_id;
   // print_r($tests);
    foreach($tests as $test){
        $p_team = new PlayerTeam();
        $p_team->player_id = $test;
        $p_team->team_id= $request->team_id;
        $allplayers[] = $p_team->attributesToArray();

    }
    // print_r($allplayers);
    PlayerTeam::insert($allplayers);
    return redirect()->route('team.show',['id'=>$request->team_id]);
   }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
