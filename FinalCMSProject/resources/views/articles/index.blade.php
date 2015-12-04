@extends('app')

@section('content')

    <h1>Articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create a New Article</a>

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{action('ArticlesController@show',[$article->id])}}"> {{$article->title}}</a>
            </h2>

            <div class="description">{{$article->description}}</div>
        </article>
    @endforeach
@stop