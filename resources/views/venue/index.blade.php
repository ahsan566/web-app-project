@extends('layouts.app')

@section('content')
@if (Session::has('success_msg'))
<p class="alert alert-success">{!! Session::pull('success_msg') !!}<p>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Venues</div>
          <a href="#" class="btn btn-danger">Delete All</a>
          <a href="{{URL::to('getImport')}}" class="btn btn-primary">Import</a>
          <a href="#" class="btn btn-success">Export</a>

          <div class="panel-body">

            <table class="table table-hover">
              <thead>
              <tr>
                <th class="text-center">Title</th>
                  <th class="text-center">City</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>

                  @foreach($venues as $venue)
                  <tr>
                    <td align="center">{{$venue -> name}}</td>
                    <td align="center">{{$venue -> city}}</td>
                        <!-- {{ link_to_route('venue.edit', 'Edit', [$venue->id], ['class'=>'btn btn-primary']) }} -->
                        <td align="center">  <a href="{{action('VenueController@edit',$venue->id)}}" class="btn btn-primary">Edit</a> </td>
                        <td>  <form action="{{action('VenueController@destroy', $venue->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </td>
                      <!-- {!! Form::open(['method' => 'DELETE', 'route' => ['venue.destroy', $venue->id] ]) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!} -->

                    </tr>

                    @endforeach
                  </table>
                </div>
              </div>
              {{ link_to_route('venue.create', 'Add new venue', null, ['class'=>'btn btn-success']) }}
            </div>
          </div>
        </div>
        @endsection
