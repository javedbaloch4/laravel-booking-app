<div class="form-groupo">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',$room->name,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('floor','Floor:') !!}
    {!! Form::select('floor', ['gr' => 'Ground Floor', 'fr' => 'First Floor', 'sec'=>'Second Floor','thr'=>'Third Floor'],null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type','Type:') !!}
    {!! Form::select('type', ['Superior Twin' => 'Superior Twin', 'Deluxe Double' => 'Deluxe Double', 'Standard Single'=>'Standard Single','Family Suite'=>'Family Suite'],null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('beds','Beds:') !!}
    {!! Form::select('beds', ['Single Bed' => 'Single Bed', 'Double Bed' => 'Double Bed', 'Triple Bed'=>'Triple Bed'],null,['class'=>'form-control']) !!}
</div>