<form action="{{ url('/cats/' . $cat->id . '/comments') }}" method="post">

    {{csrf_field()}}

    <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
        <label class="control-label" for="comment">Your comment (you may use <a href="https://en.wikipedia.org/wiki/Markdown#Example">markdown</a>):</label>
        <textarea class="form-control" name="comment" id="comment">{{{old('comment')}}}</textarea>
        {!!$errors->first('comment', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Add comment</button>
</form>