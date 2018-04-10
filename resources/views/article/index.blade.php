@extends('layouts.app')
@section('content')
    <div class="card-block">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a class="btn btn-primary btn-sm" style="float:right; margin:20px" href="{{ route('articles.create') }}">Create</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scopr="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->body }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('article.show', $article->id) }}">Show</a>
                                <a class="btn btn-success btn-sm" href="{{ route('article.edit', $article->id) }}">Update</a>
                                <a class="btn btn-danger btn-sm" href="{{ route('article.delete', $article->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
