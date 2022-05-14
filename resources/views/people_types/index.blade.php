@extends('layouts.template')
@section('title','People')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Poople types</h2>
            <a href="/peopletypes/create" class="btn btn-primary">Create a new type</a>
            <table class="table caption-top">
                <caption>List of people types</caption>
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
                    @foreach ($peopletypes as $pt )
                    <tr>
                        <th scope="row">{{$pt->id}}</th>
                        <th scope="row">{{$pt->type}}</th>
                        <th scope="row">{{date('d-m-Y H:i:s',strtotime($pt->updated_at))}}</th>
                        <th scope="row">{{date('d-m-Y H:i:s',strtotime($pt->created_at))}}</th>    
                        <th scope="row"><a href="/peopletypes/{{$pt->id}}/edit" class="btn btn-primary">Update</a></th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection