@extends('layouts.master')

@section('title')
    View Rooms
@endsection

@section('content')
    <h2><i class="fa fa-bed"></i> View Rooms</h2>
    <hr>
    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#ID</th>
            <th>name</th>
            <th>Type</th>
            <th>Floor</th>
            <th>Beds</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->type }}</td>
                <td>{{ $room->floor }}</td>
                <td>{{ $room->beds }}</td>
                <td>
                    @if ($room->status)
                        <span class="label label-primary">Available</span>
                    @else
                        <span class="label label-danger">Not Available</span>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route'=>['rooms.destroy', $room->id], 'method'=>'DELETE']) !!}
                    {!! link_to_route('rooms.edit', '',[$room->id],['class'=>'fa fa-pencil btn btn-primary btn-sm']) !!}
                    {!! link_to_route('rooms.show', '',[$room->id],['class'=>'fa fa-bars btn btn-success btn-sm']) !!}
                    {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-sm fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
