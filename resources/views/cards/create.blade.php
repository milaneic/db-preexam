@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Create a card:</h3>
            @if (count($errors) >0)
            @foreach ($errors->all() as $e )
                <p>{{$e}}</p>
            @endforeach
                
            @endif
            <form action="/cards" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="membership_id" class="form-label">Membership id</label>
                    <input class="form-control" name="membership_id" type="number" id="membership_id">
                  </div>
                  <div class="mb-3">
                    <label for="balance" class="form-label">Balance</label>
                    <input class="form-control" name="balance" type="number" id="balance">
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
