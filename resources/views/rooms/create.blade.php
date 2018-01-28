@extends('layouts.master')

@section('title')
    Rooms
@endsection

@section('content')

    <div class="row">

        <div class="col-md-6 mt-3">
            <h2><i class="fa fa-plus-square-o"></i> Add Room</h2>
            <hr>

            @include('errors.errors')

            {{ Form::open(['url' => 'rooms']) }}

            @include('rooms._fields')

            {{ Form::submit('Add Room', ['class'=>'btn btn-primary']) }}

            {!!  link_to('/rooms','back',['class'=>'btn btn-success'], $secure = null) !!}

            {{ Form::close() }}

        </div>
    </div>

@endsection