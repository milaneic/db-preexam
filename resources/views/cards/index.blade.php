@extends('layouts.template')
@section('title','Cards')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>All cards</h4>
            <a href="/cards/create" class="btn btn-primary">Create a card</a>
            <table class="table caption-top">
                <caption>List of Cards</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Number of contact</th>
                    <th scope="col">Start date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Details</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                                        
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $c )
                    <tr>
                        <th scope="row">{{$c->id}}</th>
                        <td>{{$c->membership->id}}</td>
                        <td>{{date('d-m-Y',strtotime($c->start_date))}}</td>
                        <td>{{date('d-m-Y',strtotime($c->end_date))}}</td>
                        <td>{{ucfirst($c->status)}}</td>
                        <td><a class="btn btn-primary" href="/cards/{{$c->id}}">Details</a></td>
                        <td><a class="btn btn-success" href="/cards/{{$c->id}}/edit">Update</a></td>
                        <form action="/cards/{{$c->id}}" method="post">
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