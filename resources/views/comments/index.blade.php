<h4>Comments</h4>

@forelse($cat->comments as $comment)
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Posted on
                <small>{{{$comment->created_at}}}</small>
            </h4>
            {!! $comment->htmlDescription() !!}
        </div>
    </div>
@empty
    <p>No comments yet</p>
@endforelse