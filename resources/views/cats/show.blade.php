@extends('layouts.app')

@section('content')


    <div class="col-lg-8">
        <a href="{{url()->previous()}}">&larr; Back to cats</a>
        <hr>
        <h1>{{{$cat->name}}}</h1>
        <hr>
        <p>Cat was added {{{$cat->created_at->diffForHumans()}}}</p>
        @if ($cat->user)
        <p>Cat was added by {{{$cat->user->name}}}</p>
        @else
        <p>Cat was added by an unkown user.</p>
        @endif
        <hr>

        <p class="lead">{{{$cat->description}}}</p>

        @include('comments.index')

        @if(Auth::check())
            @include('comments.create')
        @else
            Please sign in to post comments
        @endif

        @if((Auth::check() && ($cat->creator == Auth::user()->id)) || (Auth::user()->isAdmin()))

        <hr>

        <a href="{{url('/cats/'.$cat->id . '/delete')}}">Remove my cat</a>

        @endif


    </div>

    @include('layouts.sidebar')
@endsection