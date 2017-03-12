@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <h1>Profile</h1>

    <h2>Name:</h2>
    <p>{{$user->name}}</p>

    <h2>Email:</h2>
    <p>{{$user->email}}</p>

    <hr>

    <a href="{{ url('/profile/edit')}}">Edit your info</a>
    <br/>
    <a href="{{ url('/profile/password')}}">Change password</a>

</div>

    @include('layouts.sidebar')

@endsection