@extends('layouts.template')
@section('title','Cards')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>All memberships</h2>
            <a href="/memberships/create" class="btn btn-primary">Create a new memberships</a>
            <a href="/memberships/update" class="btn btn-primary">Update memberships status</a>
      <table class="table caption-top">
        <caption>List of Memberships</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name of user</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($memberships as $m )
          <tr>
            <th scope="row">{{$m->id}}</th>
            <td>{{$m->person->first_name}} {{$m->person->last_name}}</td>
            <td>{{date('d-m-Y H:i:s',strtotime($m->begin_date))}}</td>
            <td>{{date('d-m-Y H:i:s',strtotime($m->end_date))}}</td>
            <td>{{ucfirst($m->status)}}</td>
            <td><a class="btn btn-primary" href="/memberships/{{$m->id}}">Details</a></td>
            <td><a class="btn btn-success" href="/memberships/{{$m->id}}/edit">Update</a></td>
            <form action="/memberships/{{$m->id}}" method="post">
            @csrf
            @method('DELETE')
              <td><button class="btn btn-danger">Delete</button></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection