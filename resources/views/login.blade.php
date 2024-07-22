@extends('layout.layout')

@section('title')
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Login</h1>
    </div>
<div class="card-body">

    <form method="POST" action="{{route('saveLoginInfo')}}">
        @csrf
            <div class="mb-3">
                <label class="form-lable">Email:</label>
                <input type="email" value="" class="form-control mb-3" name="email" id="email" >
                <span class="text-danger text-bold error"></span>
            </div>

            <div class="mb-3">
                <label class="form-lable">Password:</label>
                <input type="password" value="" class="form-control mb-3" name="password" id="password" >
                <span class="text-danger text-bold error"></span>
            </div>

            <button class="btn btn-primary" type="submit" name="submit" value="submit">Login</button>
            <a href="/" class="btn btn-secondary">Back</a>
    </form>
</div>

    @if ($errors->any())
        <div class="card-footer text-body-secondary">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

</div>

@endsection
