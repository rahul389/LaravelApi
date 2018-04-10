@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            {{ Form::open(['route' => 'article.store', 'method' => 'put']) }}
            <fieldset>
                <legend>Edit Article</legend>
                <div class="form-group">
                    <label>Id</label>
                    <input name="article_id" type="text" class="form-control" id="article_id"
                           value="{{ $article->id }}" readonly="readonly">
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" id="title"
                           placeholder="Enter Title" value="{{ $article->title }}">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" class="form-control" id="" rows="3">{{ $article->body }}</textarea>
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