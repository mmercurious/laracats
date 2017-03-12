@extends('layouts.app')

@section('content')

<div class="col-lg-8">

<a href="{{url('/profile')}}">&larr; Back to profile</a>

<hr>

<h1>Update profile info</h1>

<form action="{{ url('/user') }}" method="post">
    {{csrf_field()}}


    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label class="control-label" for="name">Your name:</label>
        <input class="form-control" type="text" name="name" id="name" value="{{{$user->name}}}">   
        {!!$errors->first('name', '<p class="help-block">:message</p>')!!}     
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label class="control-label" for="email">Your email:</label>
        <input class="form-control" type="text" name="email" id="email" value="{{{$user->email}}}">
        {!!$errors->first('email', '<p class="help-block">:message</p>')!!}
    </div>

    <div class="form-group {{ $errors->has('thoughts') ? 'has-error' : '' }}">
        <label class="control-label" for="thoughts">Your thoughts about cats:</label>
        <textarea class="form-control" name="thoughts" id="thoughts">{{{$user->thoughts}}}</textarea>
        {!!$errors->first('thoughts', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Save new info</button>
</form>
</div>
@endsection
