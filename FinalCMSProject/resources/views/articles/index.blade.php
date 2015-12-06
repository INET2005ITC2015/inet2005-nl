@extends('app')

@section('content')

    <h1>Articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create a New Article</a>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{action('ArticlesController@show',[$article->id])}}"> Title: {{$article->title}}</a>
            </h2>
            <h3>Alias: {{$article->alias}}</h3>
            <div>Description: {{$article->description}}</div>
            <div>Area:
                    @foreach($article->contentAreas as $contentArea)
                        {{$contentArea->title}}
                    @endforeach
            </div>
            <div>Page:
                @foreach($article->pages as $page)
                    {{$page->title}}
                @endforeach
            </div>
            <div>{{$article->html_content}}</div>
            <div>Created At: {{$article->created_at}}</div>
            <div>Modified At: {{$article->updated_at}}</div>
        </article>
    @endforeach
@stop