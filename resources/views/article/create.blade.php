@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            {{ Form::open(['route' => 'article.store', 'method' => 'post']) }}
                <fieldset>
                    <legend>Create Article</legend>

                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" id="title"
                               placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" class="form-control" id="" rows="3"></textarea>
                    </div>
                </fieldset>

                </fieldset>
            <div>
                {{ Form::submit('Submit'), ['class' => 'btn btn-primary btn-round button ']}}
            </div>
            {{ Form::close() }}
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection