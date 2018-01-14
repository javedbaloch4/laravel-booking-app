@extends('layouts.master')

@section('title')
    View Rooms
@endsection

@section('content')
    <h2><i class="fa fa-calendar"></i> View Bookings</h2>
    <hr>
    @include('errors.errors')
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#Booking ID</th>
            <th>Client Name</th>
            <th>Room</th>
            <th>Floor</th>
            <th>Beds</th>
            <th>Type</th>
            <th>Booked At</th>
            <th>Booking End</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td><a href="">{{ $booking->client->name }}</a></td>
                <td>{{ $booking->room->name }}</td>
                <td>{{ $booking->room->floor }}</td>
                <td>{{ $booking->room->beds }}</td>
                <td>{{ $booking->room->type }}</td>
                <td>{{ $booking->start_date }}</td>
                <td>{{ $booking->end_date }}</td>
                <td>
                    {!! link_to_route('booking.edit','',[$booking->id],['class'=>'fa fa-pencil btn btn-primary btn-sm pull-left']) !!}
                    {!! link_to_route('booking.show', '',[$booking->id],['class'=>'fa fa-bars btn btn-success btn-sm pull-left']) !!}
                    {!! Form::open(['route'=>['rooms.destroy', $booking->id], 'method'=>'DELETE']) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-sm fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection