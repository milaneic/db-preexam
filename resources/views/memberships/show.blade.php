@extends('layouts.template')
@section('title','Membership details')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Details about membership:</h2>
            <hr>
        </div>
        <div class="card mb-5">
            <div class="card-body">
                <p>Membership type: {{$membership->membership_type}}</p>
                <p>Person id: {{$membership->people_id}}</p>
                <p>Start date: {{date('d-m-Y H:i:s',strtotime($membership->begin_date))}}</p>
                <p>End date: {{date('d-m-Y H:i:s',strtotime($membership->end_date))}}</p>
                <p>Status: {{ucfirst($membership->status)}}</p> 
            </div>
        </div>
        <br>
        <br>
        <div class="card mb-5">
            <h4>Data about owner of membership:</h4>
            <div class="card-body">
                <p>First name: {{$person->first_name}}</p>
                <p>Last name: {{$person->last_name}}</p>
                <p>Date of birth: {{date('d-m-Y',strtotime($person->dob))}}</p>
                <p>Gender: {{ucfirst($person->gender)}}</p>
                <p>Joined at: {{date('d-m-Y',strtotime($person->joined_at))}}</p>  
            </div>
        </div>
    </div>
</div>
@endsection