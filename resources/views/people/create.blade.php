@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Create a person:</h3>
            <form action="/people" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="people_type" class="form-label">Person type</label>
                  <select class="form-control" name="people_type">
                      <option value="1">User</option>
                      <option value="2">Staff</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input class="form-control" name="first_name" type="text" id="first_name">
                  </div>
                  <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input class="form-control" name="last_name" type="text" id="last_name">
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="joined_at" class="form-label">Joined at</label>
                    <input type="date" name="joined_at" id="djoined_atob" class="form-control">
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
