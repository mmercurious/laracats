@extends('layouts.app')

@section('content')


    <div class="col-lg-8">
        <a href="{{url()->previous()}}">&larr; Back to admin portal</a>
        <hr>
        <h1>Delete user: {{{$user->name}}}</h1>
        <hr>
        <p class="bg-danger">Are you sure you want to delete this user??</p>
        
        <form action="{{ url('/admin/'. $user->id .'/deleteuser') }}" method="post">
            {{csrf_field()}}
            
            <button type="submit" class="btn btn-danger">Delete user</button>
        </form>


    </div>

@endsection