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
            <form action="/cards/{{$card->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="membership_id" class="form-label">Membership id</label>
                    <input class="form-control" name="membership_id" type="number" value="{{$card->membership_id}}" id="membership_id">
                  </div>
                  <div class="mb-3">
                    <label for="balance" class="form-label">Balance</label>
                    <input class="form-control" name="balance" value="{{$card->balance}}" type="number" id="balance">
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        @if ($card->status==='active')
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                        @else
                        <option value="active">Active</option>
                        <option value="inactive" selected>Inactive</option>
                        @endif
                    </select>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
