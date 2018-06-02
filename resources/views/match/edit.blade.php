@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Update Match</div>
        <div class="panel-body">

         {!! Form::model($match, ['method'=>'PATCH', 'action'=>['MatchController@update', $match->id]]) !!}

         <div class="form-group">
           <label class="control-label col-lg-3">Team 1</label>
           <div class="col-lg-6">
             <select name="team_1" class="form-control chosen chosen-select">
               <option value="{{$match->team_1_id}}">{{$match->team_1_id}}</option>
               @foreach ($teams as $team)
               <option value="{{$team->id}}">{{$team->name}}</option>
               @endforeach
             </select>
           </div>
         </div><br><br>

         <div class="form-group">
           <label class="control-label col-lg-3">Team 2</label>
           <div class="col-lg-6">
             <select name="team_2" class="form-control chosen chosen-select">
               <option value="{{$match->team_2_id}}">{{$match->team_2_id}}</option>
               @foreach ($teams as $team)
               <option value="{{$team->id}}">{{$team->name}}</option>
               @endforeach
             </select>
           </div>
         </div><br><br>

         <div class="form-group">
           <label class="control-label col-lg-3">Match Date</label>
           <div class="col-lg-6">
             <input class="date form-control" value="{{$match->match_date}}" type="date"  placeholder="Match Date" name="match_date">
           </div>
         </div><br><br>

         <div class="form-group">
           <label class="control-label col-lg-3">Venue</label>
           <div class="col-lg-6">
             <select name="venue" class="form-control chosen chosen-select">
               <option value="{{$match->venue_id}}">{{$match->venue_id}}</option>
               @foreach ($venues as $venue)
               <option value="{{$venue->id}}">{{$venue->name}}</option>
               @endforeach
             </select>
           </div>
         </div><br><br>

            <div align="center">
            <button type="submit" class="btn btn-primary">Update match</button>
          </div>
        {!! Form::close() !!}
        <!--   </form> -->


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
