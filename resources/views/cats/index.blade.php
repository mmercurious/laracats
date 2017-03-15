@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <h1>All the cats :3</h1>
    <hr>
    @forelse($cats as $cat)
        <h2>{{{$cat->name}}}</h2>
        <hr>
        <p>Cat was added {{{$cat->created_at->diffForHumans()}}}</p>
        
        <hr>

        <!-- Cat Content -->
        <div class="lead">{!! $cat->htmlDescription() !!}</div>
        <p><a href="{{ url('/cats/' .$cat->id) }}">Read more &rarr;</a></p>
        <hr>
    @empty
        <p class="lead">No cats found :((</p>
    @endforelse

</div>

    @include('layouts.sidebar')

@endsection