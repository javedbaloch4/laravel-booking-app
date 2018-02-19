<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name','Room Name:') !!}
    {!! Form::text('name',$room->name,['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('floor') ? 'has-error' : '' }}">
    {!! Form::label('floor','Floor:') !!}
    {!! Form::select('floor', ['Ground Floor' => 'Ground Floor', 'First Floor' => 'First Floor', 'Second Floor'=>'Second Floor','Third Floor'=>'Third Floor'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Floor']) !!}
    <span class="text-danger">{{ $errors->has('floor') ? $errors->first('name') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    {!! Form::label('type','Type:') !!}
    {!! Form::select('type', ['Standard' => 'Standard', 'Deluxe' => 'Deluxe', 'Family Room'=>'Family Room'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
    <span class="text-danger">{{ $errors->has('type') ? $errors->first('name') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('beds') ? 'has-error' : '' }}">
    {!! Form::label('beds','Beds:') !!}
    {!! Form::select('beds', ['One Bed' => 'One Bed', 'Two Bed' => 'Two Bed', 'Triple Bed'=>'Triple Bed'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
    <span class="text-danger">{{ $errors->has('beds') ? $errors->first('name') : ''  }}</span>
</div>
