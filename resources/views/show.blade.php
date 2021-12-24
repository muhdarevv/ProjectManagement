@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><button class="btn btn-info"><a href="{{ route('projectmanager.home')}}" >Go Back</a></button></div>
                <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                <a href="{{ route('show')}}"><button class="btn btn-outline-success" type="button"> Project Table</button></a> 
                <a href="{{ route('showmember')}}"><button class="btn btn-sm btn-outline-secondary" type="button"> Member Table</button></a> 
                </form>
                </nav>
                <h1 class="container d-flex justify-content-center"> Projects Table </h1> 
                <center>
                <div style="width: 53rem;">
                <div class="card-body">

                <table class="table table-hover table-dark">
                <thead>
                    <tr>
                    <th scope="col">Project ID</th>
                    <th scope="col">Project Type</th>
                    <th scope="col">Project Manager</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Duration (MONTHS)</th>
                    <th scope="col">Cost (RM) </th>
                    <th scope="col">Project Client</th>
                    <th scope="col">Project Progress</th>
                    <th scope="col">Project Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                    <td>{{$project['id']}}</td>
                    <td>{{$project['project_type']}}</td>
                    <td>{{$project['user_id']}}</td>   
                    <td>{{$project['startdate']}}</td>
                    <td>{{$project['enddate']}}</td>
                    <td>{{$project['duration']}} Months</td>
                    <td>RM {{$project['cost']}}</td>
                    <td>{{$project['client']}}</td>
                    <td>{{$project['status']}}</td>
                    <td>{{$project['progress']}}</td>
                    </tr>
                    @endforeach
                </tbody>              
                </table>
                </div>
                </div>
                </center>
        </div>
    </div>
</div>
@endsection