@extends('layouts.template')
@section('title','Person')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Details about person:</h2>
            <hr>
        </div>
        <div class="card mb-5">
            <div class="card-body">
                <p>First name: {{$person->first_name}}</p>
                <p>Last name: {{$person->last_name}}</p>
                <p>Date of birth: {{date('d-m-Y',strtotime($person->dob))}}</p>
                <p>Gender: {{ucfirst($person->gender)}}</p>
                <p>Joined at: {{date('d-m-Y',strtotime($person->joined_at))}}</p>  
            </div>
        </div>
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                @if (count($person->memberships)> 0)
                <h3>List of all memberships:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Membership type</th>
                            <th scope="col">Start date</th>
                            <th scope="col">End date</th>
                            {{-- <th scope="col">Days left</th> --}}
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{$i=1;}}
                        @foreach ($person->memberships as $m )
                        
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$m->membership_type}}</td>
                            <td>{{date('d-m-Y',strtotime($m->begin_date))}}</td>
                            <td>{{date('d-m-Y',strtotime($m->enddate_date))}}</td>
                            <td>{{ucfirst($m->status)}}</td>
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
    </div>
</div>
@endsection