@extends('layouts.template')
@section('title','Create person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Create a person:</h3>
            <form action="/people/{{$person->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  {{{!! Form::number($people_id,0, [$options]) !!}}}
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input class="form-control" name="first_name" value="{{$person->first_name}}" type="text" id="first_name">
                  </div>
                  <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input class="form-control" name="last_name" value="{{$person->last_name}}" type="text" id="last_name">
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of birth</label>
                    <input type="date" name="dob" id="dob" value="{{$person->dob}}" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-control" name="gender">
                        @if ($person->gender==='male')
                        <option value="female">Female</option>
                        <option value="male" selected>Male</option>
                        @else
                        <option value="female" selected>Female</option>
                        <option value="male" >Male</option>
                        @endif
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="joined_at" class="form-label">Joined at</label>
                    <input type="datetime" name="joined_at" id="joined_atob"  value="{{$person->joined_at}}" class="form-control">
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
