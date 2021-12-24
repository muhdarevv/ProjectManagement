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

                    <br>
                    <table class="table table-hover table-info">
                      <thead>
                      <tr>
                          <th scope="col">Member ID</th>
                          <th scope="col">Project ID</th>
                          <th scope="col">Member Name</th>
                          <th>Remove Member</th>
                      </tr>
                      </thead> 
                      <tbody>
                      @foreach ($projectid as $member)
                        <tr>
                          <th scope="row">{{$member['id']}}</th>
                                      <td>{{$member['project_id']}}</</td>
                                      <td>{{$member['member_name']}}</td>  
                                      <td><a href="{{url('/home/project/memberdelete/'.$member->id)}}" class="btn btn-danger btn-sm">Remove</a></td>
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
