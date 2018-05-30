@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Update Venue</div>
        <div class="panel-body">

         {!! Form::model($venue, ['method'=>'PATCH', 'action'=>['VenueController@update', $venue->id]]) !!}

              <div class="form-group">
                <label class="control-label col-lg-3">Name</label>
                <div class="col-lg-6">
                  <input value="{{$venue->name}}" type="text" class="form-control"  placeholder="Enter Venue Name" name="name">
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">City</label>
                <div class="col-lg-6">
                  <select name="city" class="form-control chosen chosen-select">
                    <option value="{{$venue->city}}">{{$venue->city}}</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Peshawar">Peshawar</option>
                  </select>
                </div>
              </div><br><br>

            <div align="center">
            <button type="submit" class="button">Update Venue</button>
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
