@extends('layouts.app')

@section('content')
@if (Session::has('success_msg'))
<p class="alert alert-success">{!! Session::pull('success_msg') !!}<p>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Teams</div>
          <div class="panel-body">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Program</th>
                  <th class="text-center"></th>
                </tr>
              </thead>

              @foreach($teams as $team)
              <tr>
                <td align="center">{{$team -> name}}</td>
                <td align="center">{{$team -> program}}</td>
                <td align="center">  <a href="{{action('TeamController@show',$team->id)}}" class="btn btn-primary">Players</a> </td>
                <td align="center">  <a href="{{action('TeamController@edit',$team->id)}}" class="btn btn-primary">Edit</a> </td>
                <td>  <form action="{{action('TeamController@destroy', $team->id)}}" method="post">
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
      {{ link_to_route('team.create', 'Add new team', null, ['class'=>'btn btn-success']) }}
    </div>
  </div>
</div>
@endsection
