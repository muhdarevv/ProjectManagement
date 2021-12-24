@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header"><button class="btn btn-info"><a href="{{ route('home')}}" >Go Back</a></button></div>
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <h1>Welcome {{ Auth::user()->name }} </h1>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <p>Your User ID is  {{ Auth::user()->id }} </p>

                    <br><br>

                    <table class="table table-hover table-info">
                      <thead>
                        <tr>
                          <th scope="col">Project ID</th>
                          <th scope="col">User ID</th>
                          <th scope="col">Project Type</th>
                          <th scope="col">Start Date</th>
                          <th scope="col">End Date</th>
                          <th scope="col">Duration</th>
                          <th scope="col">Cost</th>
                          <th scope="col">Client</th>
                          <th scope="col">Status</th>
                          <th scope="col">Progress</th>
                          <th scope="col">Project Details</th>
                          <th scope="col">Add Project Members</th>
                          <th scope="col">View Project Members</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $project)
                        <tr>
                          <th scope="row">{{$project['id']}}</th>
                                      <td>{{$project['user_id']}}</</td>
                                      <td>{{$project['project_type']}}</td>
                                      <td>{{$project['startdate']}}</td>
                                      <td>{{$project['enddate']}}</td>
                                      <td>{{$project['duration']}}</td>
                                      <td>{{$project['cost']}}</td>
                                      <td>{{$project['client']}}</td>
                                      <td>{{$project['status']}}</td>
                                      <td>{{$project['progress']}}</td>
                                      <td><a href="{{url('/home/project/edit/'.$project->id)}}"><button type="button" class="btn btn-outline-primary">Update Project Details</button></a></td>
                                      <td><a href="{{url('/home/project/member/'.$project->id)}}"><button type="button" class="btn btn-outline-info">Add Project Members</button></a></td>
                                      <td><a href="{{url('/home/project/memberview/'.$project->id)}}"><button type="button" class="btn btn-outline-success">View Project Members</button></a></td>
                        </tr>
                    @endforeach 
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection




