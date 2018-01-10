@extends('layouts.master')

@section('title')
    Clients
@endsection

@section('content')
    <h1>Clients</h1>
    <hr>
    <a href="/clients/create" class="btn btn-primary">Create</a>
    <br><br>

    @include('errors.errors')
    <table class="table table-bordered">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>
                    {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                        {!! link_to_route('clients.edit', '', [$client->id], ['class'=>'btn btn-info btn-sm fa fa-pencil']) !!}
                        {!! link_to_route('clients.show','',[$client->id], ['class'=>'btn btn-success btn-sm fa fa-bars'])  !!}
                        {{ Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to Delete?")'] )  }}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $clients->links() }}
@endsection