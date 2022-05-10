@extends('layouts.template')
@section('title','Cards')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      All Check ins
      <table class="table caption-top">
        <caption>List of Checkins</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Card number</th>
            <th scope="col">Timestamp:</th>
            <th scope="col">Time spent:</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($checkins as $c )
          <tr>
            <th scope="row">{{$c->id}}</th>
            <td>{{$c->card->id}}</td>
            <td>{{$c->timestamp}}</td>
            <td>{{$c->time_spent}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection