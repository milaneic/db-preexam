@extends('layouts.template')
@section('title','People')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-5 mt-5">
        <div class="card-body p-5">
          Executed queries:<br>
          @foreach ($logs as $log )
            {{$log['query']}}
          @endforeach
        </div>
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-md-12">
            <h2>All people</h2>
            <a href="/people/create" class="btn btn-primary">Create a new person</a>
            <table class="table caption-top">
                <caption>List of users</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Joined at</th>
                    <th scope="col">Details</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                                        
                  </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person )
                    <tr>
                        <th scope="row">{{$person->id}}</th>
                        <td>{{$person->first_name}}</td>
                        <td>{{$person->last_name}}</td>
                        <td>{{date('d-m-Y',strtotime($person->dob))}}</td>
                        <td>{{ucfirst($person->gender)}}</td>
                        <td>{{date('d-m-Y',strtotime($person->joined_at))}}</td>
                        <td><a class="btn btn-primary" href="/people/{{$person->id}}">Details</a></td>
                        <td><a class="btn btn-success" href="/people/{{$person->id}}/edit">Update</a></td>
                        <form method="post" action="/people/{{$person->id}}">
                          @csrf
                          @method('DELETE')
                          <td><button class="btn btn-danger" type="submit">Delete</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection