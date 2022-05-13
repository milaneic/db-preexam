@extends('layouts.template')
@section('title','Cards')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>All cards</h4>
            <a href="/cards/create" class="btn btn-primary">Create a card</a>
            <a href="/cards/update" class="btn btn-primary">Update cards status</a>
            <table class="table caption-top">
                <caption>List of Cards</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Number of contact</th>
                    <th scope="col">Valid from</th>
                    <th scope="col">Valid to</th>
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
                        <td>{{date('d-m-Y H:i:s',strtotime($c->valid_from))}}</td>
                        <td>{{date('d-m-Y H:i:s',strtotime($c->valid_to))}}</td>
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