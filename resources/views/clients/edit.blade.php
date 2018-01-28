@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('content')
    <h1><i class="fa fa-pencil"></i> Edit Client</h1>
    <div class="row">
        <div class="col-md-8">

            {!! Form::model($client, ['route' => ['clients.update', $client->id],'method'=>'PUT', 'files'=>true]) !!}

            @include('clients._fields')
            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                <a href="/clients" class="btn btn-success">Back to Clients</a>
            </div>

            {!! Form::close() !!}

        </div>
        <div class="col-md-4"></div>
    </div>
@endsection