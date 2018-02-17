@extends('layouts.master')

@section('title')
    {{$room->name}} Detail
@endsection

@section('content')

    <h2><i class="fa fa-table"></i> Room Detail</h2>
    <hr>

    <table class="table table-bordered table-striped">

        <tr>
            <th>#ID</th>
            <td>{{ $room->id }}</td>
        </tr>

        <tr>
            <th>Name</th>
            <td>{{ $room->name }}</td>
        </tr>

        <tr>
            <th>Type</th>
            <td>{{ $room->type }}</td>
        </tr>

        <tr>
            <th>Floor</th>
            <td>{{ $room->floor }}</td>
        </tr>

        <tr>
            <th>Type</th>
            <td>{{ $room->type }}</td>
        </tr>

        <tr>
            <th>Registered At</th>
            <td>{{ $room->created_at->diffForHumans() }}</td>
        </tr>

        <tr>
            <th>Last update</th>
            <td>{{ $room->updated_at->diffForHumans() }}</td>
        </tr>

    </table>

    {!! Form::open(['route'=> ['rooms.destroy', $room->id], 'method'=>'DELETE']) !!}
        {!! link_to('/rooms', 'Back',['class'=>'btn btn-success btn-sm']) !!}
    {!! link_to_route('rooms.edit', 'Edit', $room->id, ['class'=>'btn btn-info btn-sm']) !!}
    {!! Form::button('Delete',['type','submit','class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to delete this?")']) !!}
    {!! Form::close() !!}
@endsection