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
                <h1 class="container d-flex justify-content-center"> Members Table</h1> 
                <center>

                <div style="width: 24rem;">
                
                <div class="card-body">
               
                <table class="table table-hover table-dark">
                <thead>
                    <tr>
                    <th scope="col">Member ID</th>
                    <th scope="col">Project ID</th>
                    <th scope="col">Member Name</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                    <td>{{$member['id']}}</td>
                    <td>{{$member['project_id']}}</td>
                    <td>{{$member['member_name']}}</td>   
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