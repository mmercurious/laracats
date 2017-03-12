@extends('layouts.app')

@section('content')


    <div class="col-lg-8">
        <a href="{{url()->previous()}}">&larr; Back to cats</a>
        <hr>
        <h1>Delete cat: {{{$cat->name}}}</h1>
        <hr>
        <p class="bg-danger">Are you sure you want to delete this cat??</p>
        
        <form action="{{ url('/cats/'. $cat->id .'/remove') }}" method="post">
            {{csrf_field()}}
            
            <button type="submit" class="btn btn-danger">Delete cat</button>
        </form>


    </div>

    @include('layouts.sidebar')
@endsection