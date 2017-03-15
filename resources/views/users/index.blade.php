@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <h1>Profile</h1>

    <h2>Name:</h2>
    <p>{{{$user->name}}}</p>

    <h2>Email:</h2>
    <p>{{{$user->email}}}</p>

    <hr>

    <h2>Thoughts about cats:</h2>
    @if($user->thoughts)
        {!! $user->htmlDescription() !!}
    @else
    	<p>You haven't added any thoughts about cats yet :(</p>

    @endif

    <hr>

    <a href="{{ url('/profile/edit')}}">Edit your info</a>
    <br/>
    <a href="{{ url('/profile/password')}}">Change password</a>
    <br/>
    <a href="{{ url('/delete')}}">Delete account</a>

</div>

    @include('layouts.sidebar')

@endsection