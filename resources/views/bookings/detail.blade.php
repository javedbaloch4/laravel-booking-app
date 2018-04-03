@extends('layouts.master')

@section('title')
    {{$booking->name}} Detail
@endsection

@section('content')

    <h2><i class="fa fa-table"></i> Room Detail</h2>
    <hr>

    <table class="table table-bordered table-striped">
        <tr>
            <th>#Booking ID</th>
            <td>{{ $booking->client->id }}</td>
        </tr>

        <tr>
            <th>Client Name</th>
            <td>{{ $booking->client->name }}</td>
        </tr>

        <tr>
            <th>Room</th>
            <td>{{ $booking->room->id }}</td>
        </tr>

        <tr>
            <th>Floor</th>
            <td>{{ $booking->room->floor }}</td>
        </tr>

        <tr>
            <th>Type</th>
            <td>{{ $booking->room->type }}</td>
        </tr>

        <tr>
            <th>Last Update By:</th>
            <td>{{ $booking->user->name }}</td>
        </tr>

        <tr>
            <th>Booking At</th>
            <td>{{ $booking->start_date }}</td>
        </tr>

        <tr>
            <th>Booking End</th>
            <td>{{ $booking->end_date }}</td>
        </tr>

    </table>

    {!! Form::open(['route'=> ['booking.destroy', $booking->id], 'method'=>'DELETE']) !!}
    {!! link_to('/booking', 'Back',['class'=>'btn btn-success btn-sm']) !!}
    {!! link_to_route('booking.edit', 'Edit', $booking->id, ['class'=>'btn btn-info btn-sm']) !!}
    {!! Form::button('Delete',['type','submit','class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to delete this?")']) !!}
    {!! Form::close() !!}
@endsection