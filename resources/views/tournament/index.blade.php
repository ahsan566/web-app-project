@extends('layouts.app')

@section('content')
@if (Session::has('success_msg'))
<p class="alert alert-success">{!! Session::pull('success_msg') !!}<p>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Tournaments</div>
          <div class="panel-body">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">City</th>
                  <th class="text-center">Start date</th>
                  <th class="text-center">End date</th>
                  <th class="text-center"></th>
                </tr>
              </thead>

              @foreach($tournaments as $tournament)
              <tr>
                <td align="center">{{$tournament -> name}}</td>
                <td align="center">{{$tournament -> city}}</td>
                <td align="center">{{$tournament -> start_date}}</td>
                <td align="center">{{$tournament -> end_date}}</td>
                <td align="center">  <a href="{{action('TournamentController@show',$tournament->id)}}" class="btn btn-success">Detail</a> </td>
                <td align="center">  <a href="{{action('TournamentController@edit',$tournament->id)}}" class="btn btn-primary">Edit</a> </td>
                <td>  <form action="{{action('TournamentController@destroy', $tournament->id)}}" method="post">
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
	  <div align="center">
      {{ link_to_route('tournament.create', 'Add New Tournament', null, ['class'=>'button a']) }}
    </div>
	</div>
  </div>
</div>
@endsection
