<div class="form-group">
    {!! Form::label('name','Room Name:') !!}
    {!! Form::text('name',$room->name,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('floor','Floor:') !!}
    {!! Form::select('floor', ['Ground Floor' => 'Ground Floor', 'First Floor' => 'First Floor', 'Second Floor'=>'Second Floor','Third Floor'=>'Third Floor'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Floor']) !!}
</div>

<div class="form-group">
    {!! Form::label('type','Type:') !!}
    {!! Form::select('type', ['Standard' => 'Standard', 'Deluxe' => 'Deluxe', 'Family Room'=>'Family Room'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
</div>

<div class="form-group">
    {!! Form::label('beds','Beds:') !!}
    {!! Form::select('beds', ['One Bed' => 'One Bed', 'Two Bed' => 'Two Bed', 'Triple Bed'=>'Triple Bed'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
</div>