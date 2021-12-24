@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h1>Welcome {{ Auth::user()->name }}</h1>    
                <a href="{{ route('create')}}" class="btn btn-primary btn-lg active">Create Project</a>
                <a href="{{ route('show')}}" class="btn btn-secondary btn-lg active">Show Project</a>                           
            </div>
        </div>
    </div>
</div>
@endsection
