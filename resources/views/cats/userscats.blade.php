@extends('layouts.app')

@section('content')
<div class="col-lg-8">
	<h1>My cats :3</h1>
    @forelse($cats as $cat)
        <h1>{{$cat->name}}</h1>
        <hr>
        <p>Cat was added {{$cat->created_at->diffForHumans()}}</p>
        
        <hr>

        <!-- Cat Content -->
        <p class="lead">{{$cat->description}}</p>
        <p><a href="{{ url('/cats/' .$cat->id) }}">Read more &rarr;</a></p>
        <hr>
    @empty
        <p class="lead">You haven't added any cats yet :((</p>
    @endforelse

</div>

    @include('layouts.sidebar')

@endsection