@extends('layouts.master')

@section('title')
    {{$booking->name}} Detail
@endsection

@section('content')

    <h2>Room Detail</h2>
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
            <th>Booking At</th>
            <td>{{ $booking->start_date }}</td>
        </tr>

        <tr>
            <th>Booking End</th>
            <td>{{ $booking->end_date }}</td>
        </tr>

    </table>

    {!! Form::open(['route'=> ['booking.destroy', $booking->id], 'method'=>'DELETE']) !!}
        {!! link_to_route('booking.edit', '', $booking->id, ['class'=>'btn btn-primary fa fa-pencil']) !!}
        {!! Form::button('',['type','submit','class'=>'btn btn-danger fa fa-trash', 'onclick'=>'return confirm("Are you sure you want to delete this?")']) !!}
        {!! link_to('/rooms', 'Back',['class'=>'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@endsection