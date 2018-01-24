@extends('layouts.master')

@section('title')
    Clients
@endsection

@section('content')
    <h2><i class="fa fa-users"></i>Clients</h2>
    <hr>
    <a href="/clients/create" class="btn btn-primary">Create</a>
    <br><br>

    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td width="100px"><img src="{{ $client->image }}" class="img img-responsive img-thumbnail" style="width: 50px;"></td>
                <td>
                    {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                    {!! link_to_route('clients.edit', '', [$client->id], ['class'=>'btn btn-primary btn-sm fa fa-pencil']) !!}
                    {!! link_to_route('clients.show','',[$client->id], ['class'=>'btn btn-success btn-sm fa fa-bars'])  !!}
                    {{ Form::button('<span class="fa fa-trash"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to Delete?")'] )  }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection