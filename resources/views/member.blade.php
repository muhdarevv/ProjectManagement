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
                    

                    <br><br>

                   <h2>Project {{$projectid}} Member Page </h2>  <br>      
                       
                   
                    <h4>Add Members</h4>
                
                <div class="card-body">

                    <form action="{{url('/home/project/member/store')}}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Project ID</label>
                            <input readonly type="text" name="project_id" value="{{$projectid}}" class="form-control">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="">Member Name</label>
                            <input type="text" name="member_name" class="form-control">
                        </div> 
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Member</button>
                        </div>

                    </form>
                    




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
