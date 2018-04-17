<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name') !!}
    {!! Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Client Name']) !!}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('email') !!}
    {!! Form::email('email', $client->email, ['class' => 'form-control', 'placeholder' => 'Client Email']) !!}
    <span class="text-danger">{{ $errors->has('email')  ? $errors->first('email') : ''}}</span>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    {!! Form::label('phone') !!}
    {!! Form::text('phone', $client->phone,['class' => 'form-control', 'placeholder' => 'Client Phone']) !!}
    <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span>
</div>

<div class="form-group">
    {!! Form::label('image') !!}
    {!! Form::file('image', $client->image, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
    <div id="thumb-output"></div>
</div>
