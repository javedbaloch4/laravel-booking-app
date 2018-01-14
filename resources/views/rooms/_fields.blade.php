<div class="form-group">
    {!! Form::label('name','Room Name:') !!}
    {!! Form::text('name','',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('floor','Floor:') !!}
    {!! Form::select('floor', ['Ground Floor' => 'Ground Floor', 'First Floor' => 'First Floor', 'Second Floor'=>'Second Floor','Third Floor'=>'Third Floor'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Floor']) !!}
</div>

<div class="form-group">
    {!! Form::label('type','Type:') !!}
    {!! Form::select('type', ['Superior Twin' => 'Superior Twin', 'Deluxe Double' => 'Deluxe Double', 'Standard Single'=>'Standard Single','Family Suite'=>'Family Suite'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
</div>

<div class="form-group">
    {!! Form::label('beds','Beds:') !!}
    {!! Form::select('beds', ['Single Bed' => 'Single Bed', 'Double Bed' => 'Double Bed', 'Triple Bed'=>'Triple Bed'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
</div>

