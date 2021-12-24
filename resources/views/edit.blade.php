@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><button class="btn btn-info"><a href="{{ route('home.project')}}" >Go Back</a></button></div>
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <h1>Welcome {{ Auth::user()->name }} </h1>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('result'))
                <h6 class="alert alert-success">{{ session('result') }}</h6>
                     @endif


                    {{ __('You are logged in!') }}

                    <p>Your User ID is  {{ Auth::user()->id }} </p>
                    <h2 >PROJECT ID {{$project->id}} </h2>
                    <div class="card-body bg-info mb-3">
                    <form action="{{ url('/home/project/update/'.$project->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Project ID (Cannot Edit)</label>
                            <input readonly type="text" name="id" value="{{$project->id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">User ID (Cannot Edit)</label>
                            <input readonly type="text" name="user_id" value="{{$project->user_id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project Type (Cannot Edit)    </label>
                            <input readonly type="text" name="project_type" value="{{$project->project_type}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Start Date</label>
                            <input type="date" min="{{now()->toDateString('Y-m-d')}}" name="startdate" value="{{$project->startdate}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">End Date</label>
                            <input type="date" min="{{now()->toDateString('Y-m-d')}}" name="enddate" value="{{$project->enddate}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Duration (Month)</label>
                            <input type="number" name="duration" value="{{$project->duration}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Cost (RM)</label>
                            <input type="number" step='0.01' name="cost" value="{{$project->cost}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Client</label>
                            <input type="text" name="client" value="{{$project->client}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Status</label>
                            <select name="status" class="form-control"> 
                                <option selected hidden value="{{$project->status}}">{{$project->status}}</option>
                                <option value="OnTrack">On Track</option>
                                <option value="Delayed">Delayed</option>
                                <option value="Extended">Extended</option>
                                <option value="Completed">Completed</option>                                                     
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Progress</label>
                            <select name="progress" class="form-control"> 
                                <option selected hidden value="{{$project->progress}}">{{$project->progress}}</option>
                                <option value="Initiation">Initiation</option>
                                <option value="Milestone1">Milestone 1</option>
                                <option value="Milestone2">Milestone 2</option>
                                <option value="FinalReport">Final Report</option>  
                                <option value="Closing">Closing </option>                                                        
                            </select>

                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Project</button>
                        </div>

                    </form>

                    
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection