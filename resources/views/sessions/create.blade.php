@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')

    <h2>Login</h2>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login" method="post">

        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="javed@mail.com">
            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="secret">
            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>

@endsection