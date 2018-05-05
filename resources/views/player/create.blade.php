@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Add Player</div>
        <div class="panel-body">

          <form action="{{ route('player.store') }}" method="POST" >


              <div class="form-group">
                <label class="control-label col-lg-3">Name</label>
                <div class="col-lg-6">
                  <input type="text" class="form-control"  placeholder="Enter Player Name" name="name">
                </div>
              </div><br><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Age</label>
                <div class="col-lg-6">
                  <select name="age" class="form-control chosen chosen-select">
                    <option value="Null">Select Age</option>
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
                    <option value="Null">Select a program</option>
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
                  <input type="text" class="form-control"  placeholder="runs" name="runs">
                </div>
              </div><br><br>

              <div class="form-group">
                <label class="control-label col-lg-3">Wickets</label>
                <div class="col-lg-6">
                  <input type="text" class="form-control"  placeholder="wickets" name="wickets">
                </div>
              </div><br><br>

            <div align="center">
            <button type="submit" class="btn btn-primary">Add Player</button>
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
