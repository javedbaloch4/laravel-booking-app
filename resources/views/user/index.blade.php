@extends('layouts.master')

@section('title')
    {{ auth()->user()->name }}
@endsection

@section('content')
    <h2>User Profile</h2>
    <hr>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th colspan="2">User Info</th>
            </tr>
        </thead>
        <tr>
            <th width="50%">ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Registered At</th>
            <td>{{ $user->created_at->diffForHumans() }}</td>
        </tr>

        <tr>
            <th>Account Updated At</th>
            <td>{{ $user->created_at->diffForHumans() }}</td>
        </tr>
    </table>

@endsection