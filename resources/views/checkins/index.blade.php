@extends('layouts.template')
@section('title','Cards')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>All check ins</h2>
      {{-- <a href="/checkins/create" class="btn btn-primary">Create a checkin</a> --}}
      <table class="table caption-top">
        <caption>List of Checkins</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Card number</th>
            <th scope="col">Check in:</th>
            <th scope="col">Check out:</th>
            <th>Time spent:</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($checkins as $c )
          <tr>
            <th scope="row">{{$c->id}}</th>
            <td>{{$c->card->id}}</td>
            <td>{{date('d-m-Y H:i:s',strtotime($c->timestamp))}}</td>
            @if (!$c->time_spent)
            <td><form action="/checkins/{{$c->id}}/checkout" method="post">
              @csrf
              @method('PATCH')
              <button type="submit" class="btn btn-success">Log out</button>
            </form></td>
            <td>still in gym</td>
            @else
            <td>{{date('d-m-Y H:i:s',strtotime($c->timestamp_out))}}</td>
           
            <td>{{gmDate("H:i:s",$c->time_spent)}}</td>
            @endif
            <td><a href="/checkins/{{$c->id}}" class="btn btn-primary">Details</a></td>
            <td><a href="/checkins/{{$c->id}}/edit" class="btn btn-success">Update</a></td>
            <td>
              <form action="/checkins/{{$c->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection