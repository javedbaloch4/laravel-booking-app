@extends('layouts.master')

@section('title')
    Booking
@endsection

@section('content')

    <div class="row">

        <div class="col-md-6 mt-3">
            <h2><i class="fa fa-calendar-plus-o"></i> Book A Room</h2>
            <hr>

            @include('errors.errors')

            {{ Form::open(['url' => ['booking']]) }}

            @include('bookings._fields')

            {{ Form::submit('Book Room', ['class'=>'btn btn-primary']) }}

            {!!  link_to('/rooms','back',['class'=>'btn btn-success'], $secure = null) !!}

            {{ Form::close() }}

        </div>
    </div>

@endsection

@section('script')
    <script>
        $('input.datepicker').Zebra_DatePicker({
        });
    </script>
@endsection