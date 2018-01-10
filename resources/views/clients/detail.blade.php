@extends('layouts.master')

@section('title')
    {{ $client->name }} Detail
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">

            <h2>Client Detail</h2>
            <hr>

            {!! link_to_route('clients.edit','', $client->id, ['class' => 'btn btn-primary btn-sm fa fa-pencil']) !!}

            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>#ID</th>
                    <td>{{ $client->id }}</td>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ $client->name }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $client->email }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $client->phone }}</td>
                </tr>
            </table>
            <a href="/clients" class="btn btn-success">Back</a>
        </div>
    </div>
@endsection
