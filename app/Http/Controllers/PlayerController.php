<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Http\Requests\PlayerRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Alert;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	 public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $players = Player::all();
        return view('player.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $player = new Player();
      $player->name = $request->name;
      $player->age = $request->age;
      $player->program = $request->program;
      $player->runs = $request->runs;
      $player->wickets = $request->wickets;
//        Player::create($request->all());
      $player->save();
      return redirect()->route('player.index')->with('message','Player has been added successfully');
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
      $player = Player::findOrFail($id);
      // $player = Player::where('id', $id)->first();
      return view('player.edit',  compact('player'));
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
      $player = Player::findOrFail($id);

      // $player = Player::where('id', $request->$id)->first();
      $player->name = $request->name;
      $player->age = $request->age;
      $player->program = $request->program;
      $player->runs = $request->runs;
      $player->wickets = $request->wickets;
      $player->save();
      //alert()->success('You have been logged out.', 'Good bye!');
      Session::flash('success_msg','Player updated successfully');
      return redirect()->route('player.index');

      //return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // $player = Player::find($id);
      // $player->delete();
      Player::destroy($id);
      return redirect()->route('player.index');
    }
}
