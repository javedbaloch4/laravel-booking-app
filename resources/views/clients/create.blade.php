@extends('layouts.master')

@section('title')
    Add Client
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2><i class="fa fa-users"></i>Add Client</h2>
            <hr>

            @include('errors.errors')

            {!! Form::open(['url' => 'clients']) !!}
            @include('clients._fields')
            <div class="form-group">
                {!! Form::submit('Add Client', ['class'=>'btn btn-primary']) !!}
                <a href="/clients" class="btn btn-success">View Clients</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@endsection