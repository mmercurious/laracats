@extends('layouts.app')

@section('content')

<form action="/cats" method="post">
    {{csrf_field()}}


    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label class="control-label" for="name">Cat's name:</label>
        <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">   
        {!!$errors->first('name', '<p class="help-block">:message</p>')!!}     
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label class="control-label" for="description">Cat's description:</label>
        <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
        {!!$errors->first('description', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Add a new cat</button>
</form>

@endsection
