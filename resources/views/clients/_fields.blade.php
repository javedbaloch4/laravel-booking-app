<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Client Name']) !!}
</div>

<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::email('email',$client->email, ['class' => 'form-control', 'placeholder' => 'Client Email']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone') !!}
    {!! Form::text('phone', $client->phone,['class' => 'form-control', 'placeholder' => 'Client Phone']) !!}
</div>

<div class="form-group">
    {!! Form::label('image') !!}
    {!! Form::file('image','',['class' => 'form-control']) !!}
</div>