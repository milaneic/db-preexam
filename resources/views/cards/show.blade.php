@extends('layouts.template')
@section('title','Membership details')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Details about card:</h2>
            <hr>
        </div>
        <div class="card mb-5">
            <div class="card-body">
                <p>Membership id: {{$card->membership_id}}</p>
                <p>Created at: {{date('d-m-Y H:i:s',strtotime($card->created_at))}}</p>
                <p>Status: {{ucfirst($card->status)}}</p> 
            </div>
        </div>
        <br>
        <br>
        <div class="card mb-5">
            <h4>Data about owner of membership:</h4>
            @php
            $person=$card->membership->person;
            @endphp
            <div class="card-body">
                <p>First name: {{$person->first_name}}</p>
                <p>Last name: {{$person->last_name}}</p>
                <p>Date of birth: {{date('d-m-Y',strtotime($person->dob))}}</p>
                <p>Gender: {{ucfirst($person->gender)}}</p>
                <p>Joined at: {{date('d-m-Y',strtotime($person->joined_at))}}</p>  
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if (count($card->check_ins)> 0)
                <h3>List of all check ins:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Check type</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Timespent</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{$i=1;}}
                        @foreach ($card->check_ins as $c )
                        
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                @if ($c->check_type===1)
                                    Log in
                                @else
                                    Log out
                                @endif
                            </td>
                            <td>{{date('d-m-Y H:i:s',strtotime($c->timestamp))}}</td>
                            {{-- <td><a class="btn btn-primary" href="/people/{{$person->id}}">Details</a></td>
                            <td><a class="btn btn-success" href="/people/">Update</a></td>
                            <td><a class="btn btn-danger" href="/table/destroy/{}">Delete</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
                @else
                <h3>No memberships yet</h3>
                @endif
            </div>
            
        </div>
        @endsection