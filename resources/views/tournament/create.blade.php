@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Add Tournament</div>
        <div class="panel-body">

          <form action="{{ route('tournament.store') }}" method="POST" >


            <div class="form-group">
              <label class="control-label col-lg-3">Name</label>
              <div class="col-lg-6">
                <input type="text" class="form-control"  placeholder="Enter Tournament Name" name="name">
              </div>
            </div><br><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">City</label>
              <div class="col-lg-6">
                <select name="city" class="form-control chosen chosen-select">
                  <option value="Null">Select City</option>
                  <option value="Karachi">Karachi</option>
                  <option value="Lahore">Lahore</option>
                  <option value="Islamabad">Islamabad</option>
                  <option value="Peshawar">Peshawar</option>
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Start Date</label>
              <div class="col-lg-6">
                <input class="date form-control" type="date"  placeholder="Start Date" name="start_date">
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">End Date</label>
              <div class="col-lg-6">
                <input type="date" class="date form-control"  placeholder="End Date" name="end_date">
              </div>
            </div><br><br>

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


            <div align="center">
              <button type="submit" class="button a">Add Tournament</button>
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
