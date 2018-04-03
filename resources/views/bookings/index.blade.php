@extends('layouts.master')

@section('title')
    View Rooms
@endsection

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search In Bookings">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
    <h2><i class="fa fa-calendar"></i> View Bookings</h2>
    <hr>

    @include('errors.errors')
    <table class="table table-bordered table-hover">
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
            <th>Booked By</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td><a href="clients/{{ $booking->client->id }}">{{ $booking->client->name }}</a></td>
                <td>{{ $booking->room->name }}</td>
                <td>{{ $booking->room->floor }}</td>
                <td>{{ $booking->room->beds }}</td>
                <td>{{ $booking->room->type }}</td>
                <td>{{ $booking->start_date }}</td>
                <td>{{ $booking->end_date }}</td>
                <td>{{ $booking->user->name }}</td>
                <td>
                    @if ($booking->status)
                        <label class="label label-primary text-xs">Booked <i class="fa fa-check"></i></label>
                    @else
                        <label class="label label-warning text-xs">Canceled <i class="fa fa-ban"></i></label>
                    @endif
                </td>
                <td>
                    <div class="input-group">
                        {!! Form::open(['route'=>['booking.destroy', $booking->id], 'method'=>'DELETE',]) !!}
                        {!! link_to_route('booking.edit','',[$booking->id],['class'=>'fa fa-pencil btn btn-primary btn-xs','title' => 'Edit Booking']) !!}
                        {!! link_to_route('booking.show', '',[$booking->id],['class'=>'fa fa-bars btn btn-success btn-xs','title' => 'Show Booking Details']) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-xs fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")','title' => 'Delete Booking']) }}
                        {!! Form::close() !!}

                        {!! Form::open(['route'=>['booking.cancel', $booking->id, $booking->room_id]]) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-warning btn-xs fa fa-times-circle col-md-12','onclick'=>'return confirm("Are you sure you want to Cancel Booking?")', 'title' => 'Cancel Booking', 'style' => 'margin-top: 5px']) }}
                        {!! Form::close() !!}

                    </div>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection