@extends('layouts.app')
@section('content')
    <div class="card-block">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a class="btn btn-primary btn-sm" href="{{ route('articles.create') }}">Create</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->body }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
