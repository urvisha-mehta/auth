@extends('layout.layout')

@section('title')
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Fill The Form</h1>
    </div>
<div class="card-body">

    <form action="{{route('saveRegisterInfo')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label class="form-lable">Name:</label>
                <input type="text" value="" class="form-control mb-3" name="name" id="name" >
                <span class="text-danger text-bold error"></span>
            </div>

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

            <div class="mb-3">
                <label class="form-lable">Confirm Password:</label>
                <input type="password" value="" class="form-control mb-3" name="password_confirmation" id="password_confirmation" >
                <span class="text-danger text-bold error"></span>
            </div>

            <button class="btn btn-primary" type="submit" name="submit" value="submit">Register</button>
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
