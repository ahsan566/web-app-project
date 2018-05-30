@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Update team</div>
        <div class="panel-body">

         {!! Form::model($team, ['method'=>'PATCH', 'action'=>['TeamController@update', $team->id]]) !!}

              <div class="form-group">
                <label class="control-label col-lg-3">Name</label>
                <div class="col-lg-6">
                  <input value="{{$team->name}}" type="text" class="form-control"  placeholder="Enter Team Name" name="name">
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Program</label>
                <div class="col-lg-6">
                  <select name="program" class="form-control chosen chosen-select">
                    <option value="{{$team->program}}">{{$team->program}}</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BBA">BBA</option>
                    <option value="ACF">ACF</option>
                    <option value="BSEM">BSEM</option>
                    <option value="BSSS">BSSS</option>
                  </select>
                </div>
              </div><br><br>

            <div align="center">
            <button type="submit" class="button">Update team</button>
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
