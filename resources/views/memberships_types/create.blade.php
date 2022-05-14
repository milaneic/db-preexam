@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Create a new membership type:</h3>
            <form action="/membershiptypes" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input class="form-control" name="type" type="text" id="type">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection

