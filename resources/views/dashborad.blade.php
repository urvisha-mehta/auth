@extends('layout.layout')

@section('title')
@endsection

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h1>Welcome  {{Auth::user()->name}}</h1>
        </div>
        <div class="card-body">
            <div class="text-center">
                <a href="/" type="button" class="btn btn-primary">Go To Inner Page</a>
                <a href="{{route('logout')}}" type="button" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
@endsection

