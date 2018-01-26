@extends('layouts.master')

@section('title')
    {{ $client->name }} Detail
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">

            <h2><i class="fa fa-user"></i> Client Detail</h2>
            <hr>

            <h3><i class="fa fa-user-circle-o"></i> Personal Details</h3>
            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>#Client ID</th>
                    <td>{{ $client->id }}</td>
                    <th class="text-center">Photo</th>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ $client->name }}</td>
                    <td rowspan="{{ $client->count() - 1 }}"><img src="{{ asset('uploads/'.$client->image) }}" alt="" class="img img-responsive" style="width: 150px; margin: 30px auto;"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $client->email }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $client->phone }}</td>
                </tr>

                <tr>
                    <th>Registered At</th>
                    <td>{{ $client->created_at->diffForHumans() }}</td>
                </tr>

                <tr>
                    <th>Updated At</th>
                    <td>{{ $client->updated_at->diffForHumans() }}</td>
                </tr>
            </table>
            {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
            <a href="/clients" class="btn btn-success btn-sm">Back</a>
            {!! link_to_route('clients.edit', 'Edit', [$client->id], ['class'=>'btn btn-info btn-sm']) !!}
            {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
            <hr>
            <h3><i class="fa fa-calendar"></i> Booking Details</h3>

            @if ($bookings)
                <table class="table table-hover table-striped table-bordered mt-1">
                    <thead>
                    <tr>
                        <th>#Booking ID</th>
                        <th>Room</th>
                        <th>Booked At</th>
                        <th>Left At</th>
                        <th>Booked By</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td><a href="/rooms/{{ $booking->room->id }}">{{ $booking->room->name }}</a></td>
                            <td>{{ $booking->start_date }}</td>
                            <td>{{ $booking->end_date }}</td>
                            <td>Ali</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

                {!! Form::close() !!}
        </div>
        @else
            <h2>{{ $client->name }} has not booked rooms yet</h2>
        @endif

    </div>
@endsection
