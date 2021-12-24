@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><button class="btn btn-info"><a href="{{ route('projectmanager.home')}}" >Go Back</a></button></div>

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                <h1 class="container d-flex justify-content-center"> Create Project </h1> 

                <div class="container d-flex justify-content-center">

                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="{{ route('create.store')}}" method="POST">
                                @csrf
                            <div class="form-group"> 

                                <label for="project_type">Select Project Type</label>                             
                                <select  id="project_type" class="form-control" name="project_type" required>
                                    <option selected hidden value="">Choose Project Type</option>
                                    <option value="Consultancy">Consultancy</option>
                                    <option value="Research">Research</option>
                                </select>
                            </div>

                            <div class="form-group"> 
                                <label for="user_id">Select Project Leader</label>
                                <select id="user_id" class="form-control" name="user_id" required>                                    
                                    <option selected hidden value="">Choose Project Leader</option>
                                    @foreach ($data as $pl)
                                    <option value="{{$pl->id}}]">{{$pl->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary float-right">Create New Project</button>      
                            </form>
                        </div>           
                    </div> 
                </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection