@extends('layouts.master')

@section('title')
    View Rooms
@endsection

@section('content')
    <h2><i class="fa fa-calendar"></i> View Bookings</h2>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <strong class="clearfix">Filters:</strong>
            <div class="dropdown pull-left">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Filter by Date <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="/booking">All</a></li>
                    <li><a href="#">Today</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>

            <div class="dropdown pull-left"> &nbsp;
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">By Rooms<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Today</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>

            <div class="dropdown pull-left"> &nbsp;
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">By Beds <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Today</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>

            <div class="dropdown pull-left"> &nbsp;
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">By Type <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Today</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>

            <div class="dropdown pull-left"> &nbsp;
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">By Floor <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Today</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>

        </div>
    </div>
    <br>
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
                <td>
                    {!! Form::open(['route'=>['booking.destroy', $booking->id], 'method'=>'DELETE']) !!}
                    {!! link_to_route('booking.edit','',[$booking->id],['class'=>'fa fa-pencil btn btn-primary btn-sm']) !!}
                    {!! link_to_route('booking.show', '',[$booking->id],['class'=>'fa fa-bars btn btn-success btn-sm']) !!}
                    {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-sm fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection