<form action="{{ url('/cats/' . $cat->id . '/comments') }}" method="post">

    {{csrf_field()}}

    <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
        <label class="control-label" for="comment">Your comment:</label>
        <input class="form-control" type="text" name="comment" id="comment" value="{{{old('comment')}}}">
        {!!$errors->first('comment', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Add comment</button>
</form>