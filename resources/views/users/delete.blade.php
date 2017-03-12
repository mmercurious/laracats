@extends('layouts.app')

@section('content')

<div class="col-lg-8">

<a href="{{url('/profile')}}">&larr; Back to profile</a>

<hr>

<h1>Delete account</h1>

<form action="{{ url('/delete') }}" method="post">
    {{csrf_field()}}
    <div>
	    <p class="bg-danger">You're about to delete your account!
	 	<br/>
	    Account info cannot be retrieved once the account is deleted!
	    <br/>
	    Are you sure you want to delete your account?
	    </p>
    </div>


    <button type="submit" class="btn btn-danger">Delete account</button>
</form>
</div>
@endsection