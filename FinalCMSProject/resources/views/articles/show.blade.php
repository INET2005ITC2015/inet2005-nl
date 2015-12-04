@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>

    <article>
      {{$article->description}}
    </article>

    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['ArticlesController@destroy', $article->id]]) !!}
        {!! Form::submit('Delete this Article?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>


@stop