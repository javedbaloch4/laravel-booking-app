@extends('layouts.master')

@section('title')
    Edit Room
@endsection

@section('content')
    <h2>Edit Rooms</h2>
    <hr>
        {!! Form::model($room, ['route' => ['rooms.update',$room->id], 'method'=>'PUT']) !!}
        @include('rooms._fields')
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
        {!! link_to('/rooms', 'Back',['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection