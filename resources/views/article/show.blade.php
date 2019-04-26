@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <fieldset>
                <legend>Article</legend>
                <div class="form-group">
                    <b><span>Id :</span></b>
                    <span>{{ $article->id }}</span>
                </div>
                <div class="form-group">
                    <b><label>Title :</label></b>
                    <span>{{ $article->title }}</span>
                </div>
                <div class="form-group">
                    <b><label>Body :</label></b>
                    <span>{{ $article->body }}</span>
                </div>
            </fieldset>

            </fieldset>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection