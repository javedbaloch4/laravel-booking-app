<div class="form-group">
    {!! Form::label('name','Client:') !!}
    <select class="selectpicker form-control" data-live-search="true" title="Select Client" name="client_id">
        @foreach ($clients as $client)
            <option data-subtext="{{ $client->name }}" value="{{ $client->id }}">Client ID:{{ $client->id }}</option>
        @endforeach
    </select>
    {{--{!! Form::select('client_id',[], null, ['class'=>'form-control']) !!}--}}
</div>
<div class="form-group">
    {!! Form::label('room','Room:') !!}
    <select class="selectpicker form-control" data-live-search="true" title="Select Client" name="room_id">
        @foreach ($rooms as $room)
            <option data-subtext="{{ $room->name }}" value="{{ $room->id }}">Room ID:{{ $room->id }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('start_date','Start Date:') !!}
    {!! Form::date('start_date','',['class'=>'form-control datepicker']) !!}
</div>

<div class="form-group">
    {!! Form::label('end_date','End Date') !!}
    {!! Form::date('end_date','',['class'=>'form-control datepicker']) !!}
</div>
