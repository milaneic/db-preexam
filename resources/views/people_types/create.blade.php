@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Create a new people type:</h3>
            <form action="/peopletypes" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">First name</label>
                    <input class="form-control" name="type" type="text" id="first_name">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection

