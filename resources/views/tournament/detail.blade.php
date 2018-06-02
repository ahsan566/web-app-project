@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Matches</div>
        <div class="panel-body">

          <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center">Team 1</th>
                <th class="text-center">Team 2</th>
                <th class="text-center">Match date</th>
                <th class="text-center">Venue</th>
                <th class="text-center"> Action</th>
              </tr>
            </thead>

            @foreach($matches as $match)
            <tr>
              <td align="center">{{$match->team1->name}}</td>
              <td align="center">{{$match->team2->name}}</td>
              <td align="center">{{$match->match_date}}</td>
              <td align="center">{{$match->venue->name}}</td>
              <td align="center">  <a href="{{action('MatchController@edit',$match->id)}}" class="btn btn-primary">Edit</a> </td>
              <td>  <form action="{{action('MatchController@destroy', $match->id, $match->tournament_id)}}" method="post">
                {{csrf_field()}}
                <input name="tournament_id" type="hidden" value="{{$match->tournament_id}}">
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
      <div class="panel-heading">Add Matches</div>
      <div class="panel-body">

        <form action="{{ route('match.store') }}" method="POST" >


          <div align="center" class="row">
            <div class="col-lg-12">

              <div class="input-group">
                <div class="col-xs-6">
                  <label>Team 1</label>
                  <select name="team_1_id" class="form-control chosen chosen-select">
                    <option value="Null">Select Team 1</option>
                    @foreach ($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-xs-6">
                  <label>Team 2</label>
                  <select name="team_2_id" class="form-control chosen chosen-select">
                    <option value="Null">Select Team 2</option>
                    @foreach ($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                  </select>
                </div>

              </div><br>


              <div class="input-group">

                <div class="col-xs-5">
                  <label>Match Date</label>
                  <input type="date"  placeholder="Match Date" name="match_date" class="form-control chosen chosen-select">
                </div>

                <div class="col-xs-5">
                  <label>Venue</label>
                  <select name="venue_id" class="form-control chosen chosen-select">
                    <option value="Null">Select Venue</option>
                    @foreach ($venues as $venue)
                    <option value="{{$venue->id}}">{{$venue->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

          </div>
        </div>


        <div class="form-group">
          <div class="col-lg-6">
            <input class="form-control" type="hidden"  value="{{$tournament->id}}" name="tournament_id">
          </div>
        </div>

        <div align="center">
          <button type="submit" class="button a">Add Match</button>
        </div>
        <input type="hidden" value="{{Session::token()}}" name="_token">

      </form>

      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
      <script type="text/javascript">
      $(function() {
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true
        });
      });

      </script>
    </div>


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
