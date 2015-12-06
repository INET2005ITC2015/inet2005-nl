@extends('app')

@section('content')

    <h1>Title: {{$article->title}}</h1>
    <h3>Alias: {{$article->alias}}</h3>
    <article>Description: {{$article->description}}</article>

    <article>Area:
        @foreach($article->contentareas as $contentArea)
            {{$contentArea->title}}
        @endforeach
    </article>

    <div>Page:
        @foreach($article->pages as $page)
            {{$page->title}}
        @endforeach
    </div>

    <article>Created By: </article>
    <article>Modified By: </article>
    <article>Created At: {{$article->created_at}}</article>
    <article>Modified At: {{$article->updated_at}}</article>

    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['ArticlesController@destroy', $article->id]]) !!}
        {!! Form::submit('Delete this Article?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>


@stop