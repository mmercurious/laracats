@extends('layouts.app')

@section('content')

<div class="col-lg-8">

<a href="{{url('/profile')}}">&larr; Back to profile</a>

<hr>

<h1>Change password</h1>

<form action="{{ url('/user/password') }}" method="post">
    {{csrf_field()}}


    <div class="form-group {{ $errors->has('old') ? 'has-error' : '' }}">
        <label class="control-label" for="old">Old password:</label>
        <input class="form-control" type="password" name="old" id="old">   
        {!!$errors->first('old', '<p class="help-block">:message</p>')!!}     
    </div>

    <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
        <label class="control-label" for="new_password">New password:</label>
        <input class="form-control" type="password" name="new_password" id="new_password">
        {!!$errors->first('new_password', '<p class="help-block">:message</p>')!!}
    </div>

    <div class="form-group {{ $errors->has('new_password_confirmation') ? 'has-error' : '' }}">
        <label class="control-label" for="new_password_confirmation">New password again:</label>
        <input class="form-control" type="password" name="new_password_confirmation" id="new_password_confirmation">
        {!!$errors->first('new_password_confirmation', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Change password</button>
</form>
</div>
@endsection
