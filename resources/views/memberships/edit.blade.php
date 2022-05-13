@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Create a membership:</h3>
      @if (count($errors)>0)
      @foreach ($errors->all() as $error )
      <p>{{$error}}</p>
      @endforeach
      @endif
      <form action="/memberships/{{$membership->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="people_id" class="form-label">User id</label>
          <input class="form-control" name="people_id" value="{{$membership->people_id}}"  type="number" id="people_id">
        </div>
        <div class="mb-3">
          <label for="membership_type" class="form-label">Membership type</label>
          <select class="form-control" name="membership_type">
            @if ($membership->membership_type===1)
            <option value="1" selected>Premiun</option>
            <option value="2">Standard</option>
            @else
            <option value="1">Premiun</option>
            <option value="2" selected>Standard</option>
            @endif
          
          </select>
        </div>
        <div class="mb-3">
          <label for="begin_date" class="form-label">Started date</label>
          <input type="datetime" name="begin_date" value="{{$membership->begin_date}}" id="begin_date" class="form-control">
        </div>
        <div class="mb-3">
          <label for="end_date" class="form-label">End date</label>
          <input type="datetime" name="end_date" value="{{$membership->end_date}}" id="end_date" class="form-control">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-control" name="status"> 
            @if ($membership->status==='active')
            <option value="active" selected>Active</option>
            <option value="inactive">Inactive</option>
            <option value="paused">Paused</option>
            @elseif($membership->status==='inactive')
            <option value="active">Active</option>
            <option value="inactive" selected>Inactive</option>
            <option value="paused">Paused</option>
            @else
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            <option value="paused" selected>Paused</option>
            @endif
          </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
      </form>
    </div>
  </div>
</div>
@endsection
