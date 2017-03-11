<form action="/cats/{{$cat->id}}/comments" method="post">

    {{csrf_field()}}

    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
        <label class="control-label" for="body">Your comment:</label>
        <input class="form-control" type="text" name="body" id="body" value="{{old('body')}}">
        {!!$errors->first('body', '<p class="help-block">:message</p>')!!}
    </div>

    <button type="submit" class="btn btn-primary">Add comment</button>
</form>