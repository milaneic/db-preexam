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
      <form action="/memberships" method="POST">
        @csrf
        <div class="mb-3">
          <label for="people_id" class="form-label">User id</label>
          <input class="form-control" name="people_id"  type="number" id="people_id">
        </div>
        <div class="mb-3">
          <label for="membership_type" class="form-label">Membership type</label>
          <select class="form-control" name="membership_type">
            <option value="1">Premiun</option>
            <option value="2">Standard</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="begin_date" class="form-label">Started date</label>
          <input type="datetime" name="begin_date" id="begin_date" class="form-control">
        </div>
        <div class="mb-3">
          <label for="end_date" class="form-label">End date</label>
          <input type="datetime" name="end_date" id="end_date" class="form-control">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Membership type</label>
          <select class="form-control" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            <option value="paused">Paused</option>
          </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
  });
</script>
@endsection
