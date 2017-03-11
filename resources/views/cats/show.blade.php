@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        <h1>{{$cat->name}}</h1>
        <hr>
        <p>Cat was added {{$cat->created_at->diffForHumans()}}</p>
        <hr>

        <p class="lead">{{$cat->description}}</p>

        @include('comments.index')

        @if(Auth::check())
            @include('comments.create')
        @else
            Please sign in to post comments
        @endif
    </div>

    @include('layouts.sidebar')
@endsection