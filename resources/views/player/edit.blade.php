@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Update Player</div>
        <div class="panel-body">

         {!! Form::model($player, ['method'=>'PATCH', 'action'=>['PlayerController@update', $player->id]]) !!}
        <!--   <form action="{{ route('player.update',$player->id) }}" method="PATCH" > -->

          <!--  {{!! csrf_field() !!}} -->

            <!-- <input type="hidden" name="_method" value="PATCH"> -->
            <!-- {{ method_field('PATCH') }} -->


              <div class="form-group">
                <label class="control-label col-lg-3">Name</label>
                <div class="col-lg-6">
                  <input value="{{$player->name}}" type="text" class="form-control"  placeholder="Enter Player Name" name="name">
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Age</label>
                <div class="col-lg-6">
                  <select name="age" class="form-control chosen chosen-select">
                    <option value="{{$player->age}}">{{$player->age}}</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                  </select>
                </div>
              </div><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Program</label>
                <div class="col-lg-6">
                  <select name="program" class="form-control chosen chosen-select">
                    <option value="{{$player->program}}">{{$player->program}}</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BBA">BBA</option>
                    <option value="ACF">ACF</option>
                    <option value="BSEM">BSEM</option>
                    <option value="BSSS">BSSS</option>
                  </select>
                </div>
              </div><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Runs</label>
                <div class="col-lg-6">
                  <input value="{{$player->runs}}" type="text" class="form-control"  placeholder="runs" name="runs">
                </div>
              </div><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Wickets</label>
                <div class="col-lg-6">
                  <input value="{{$player->wickets}}" type="text" class="form-control"  placeholder="wickets" name="wickets">
                </div>
              </div><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Role</label>
                <div class="col-lg-6">
                  <select name="role" class="form-control chosen chosen-select">
                    <option value="{{$player->role}}">{{$player->role}}</option>
                    <option value="Batsman">Batsman</option>
                    <option value="Bowler">Bowler</option>
                    <option value="All-Rounder">All-Rounder</option>
                  </select>
                </div>
              </div><br><br>

            <div align="center">
            <button type="submit" class="btn btn-primary">Update Player</button>
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
