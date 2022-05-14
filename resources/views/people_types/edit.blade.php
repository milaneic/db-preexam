@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Update a people types:</h3>
            <form action="/peopletypes/{{$pt['id']}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input class="form-control" name="type" value="{{$pt->type}}" type="text" id="first_name">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection

