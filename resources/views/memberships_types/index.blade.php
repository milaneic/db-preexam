@extends('layouts.template')
@section('title','People')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Memberhip types</h2>
            <a href="/membershiptypes/create" class="btn btn-primary">Create a new type</a>
            <table class="table caption-top">
                <caption>List of memberships types</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name </th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Update</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($membershiptypes as $mt )
                    <tr>
                        <th scope="row">{{$mt->id}}</th>
                        <th scope="row">{{$mt->type}}</th>
                        <th scope="row">{{date('d-m-Y H:i:s',strtotime($mt->updated_at))}}</th>
                        <th scope="row">{{date('d-m-Y H:i:s',strtotime($mt->created_at))}}</th>    
                        <th scope="row"><a href="/membershiptypes/{{$mt->id}}/edit" class="btn btn-primary">Update</a></th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection