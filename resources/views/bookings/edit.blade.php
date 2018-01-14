@extends('layouts.master')

@section('title')
    Edit Booking
@endsection

@section('content')
    <h2>Edit Rooms</h2>
    <hr>
        {!! Form::model($booking, ['route' => ['rooms.update',$booking->id], 'method'=>'PUT']) !!}
        @include('bookings._fields')
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
        {!! link_to('/rooms', 'Back',['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection