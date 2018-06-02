@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <div class="panel panel-default">
        <div class="panel-heading">Players</div>
        <div class="panel-body">

          <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center">Player</th>
                <th class="text-center">Program</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>

            @foreach($player_team as $player)
            <tr>
              <td align="center">{{$player->player->name}}</td>
              <td align="center">{{$player->player->program}}</td>
              <td align="center">  <a href="{{action('PlayerController@edit',$player->id)}}" class="btn btn-primary">Edit</a> </td>
              <td>  <form action="{{action('PlayerController@destroy', $player->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>

          </tr>

          @endforeach
        </table>

      </div>
    </div>

      <div class="panel panel-default">
        <div class="panel-heading">Add Players</div>
        <div class="panel-body">

          <form action="{{ route('playerteam.store') }}" method="POST" >


            <div class="form-group">
              <label class="control-label col-lg-3">Player 1</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <div class="col-lg-6">
                <input class="form-control" type="hidden" value="{{$team->id}}" name="team_id">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 2</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 3</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 4</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 5</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 6</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 7</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 8</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 9</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 10</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 11</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 12</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 13</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 14</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 15</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player 16</label>
              <div class="col-lg-6">
                <select name="player_id[]" class="form-control chosen chosen-select">
                  <option value="Null">Select</option>
                  @foreach($players as $player)
                  <option value="{{$player->id}}">{{$player->name}}</option>
                  @endforeach
                </select>
              </div>
            </div><br><br>




            <div align="center">
              <button type="submit" class="button a">Add Players</button>
            </div>
            <input type="hidden" value="{{Session::token()}}" name="_token">

          </form>


        </div>
      </div>
      @if(count($errors)>0)
      <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
    </div>
  </div>
</div>
@endsection
