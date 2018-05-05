@extends('layouts.app')

@section('content')
@if (Session::has('success_msg'))
<p class="alert alert-success">{!! Session::pull('success_msg') !!}<p>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Players</div>
          <div class="panel-body">

            <table class="table table-hover">
              <tr>
                <th class="text-center">Title</th>
                  <th class="text-center">Program</th>
                  </tr>

                  @foreach($players as $player)
                  <tr>
                    <td align="center">{{$player -> name}}</td>
                    <td align="center">{{$player -> program}}</td>
                    <td align="center">
                      {{ link_to_route('player.edit', 'Edit', [$player->id], ['class'=>'btn btn-primary']) }}
                    </td>

                      <!-- <form action= {{route('player.destroy',$player->id)}} method="post" ><input type='submit' value='Delete'></form> -->
                      <!-- <a href="{{route('player.destroy',$player->id)}}">Delete</a> -->
                      <!-- <a class="btn btn-danger" href="{{ route('player.destroy', ['id' => $player->id]) }}" title="Delete"><i class="icon-trash"></i></a> -->
                      <td>
                        {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['player.destroy', $player->id]
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                      </td>
                    </tr>

                    @endforeach
                  </table>
                </div>
              </div>
              {{ link_to_route('player.create', 'Add new player', null, ['class'=>'btn btn-success']) }}
            </div>
          </div>
        </div>
        @endsection
