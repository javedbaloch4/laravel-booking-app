@extends('layouts.master')

@section('title')
    {{$room->name}} Detail
@endsection

@section('content')

    <h2>Room Detail</h2>
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

    </table>

    {!! Form::open(['route'=> ['rooms.destroy', $room->id], 'method'=>'DELETE']) !!}
        {!! link_to_route('rooms.edit', '', $room->id, ['class'=>'btn btn-primary fa fa-pencil']) !!}
        {!! Form::button('',['type','submit','class'=>'btn btn-danger fa fa-trash', 'onclick'=>'return confirm("Are you sure you want to delete this?")']) !!}
        {!! link_to('/rooms', 'Back',['class'=>'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@endsection