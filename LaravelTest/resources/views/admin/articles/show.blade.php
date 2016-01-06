@extends('app')

@section('content')

    <h1>Title: {{$article->title}}</h1>
    <h3>Alias: {{$article->alias}}</h3>
    <article>Created At: {{ $article->created_at->format('M d,Y \a\t h:i a') }}</article>
    <div>Created By:{{ $article->user->first_name }} {{ $article->user->last_name }}</div>
    <article>Modified At:{{ $article->updated_at->format('M d,Y \a\t h:i a') }}</article>
    @if(($article->modified_by != $article->created_by) or ($article->modified_by == $article->created_by))
        <div>Modified By: {{ $fName }} {{ $lName }} </div>
    @endif
    <article>Description: {{$article->description}}</article>
    <div>Html Content: {{$article->html_content}}</div>
    <div>@if($article->all_pages == 1)
            All Pages: Yes
        @endif
        @if($article->all_pages == 0)
            All Pages: No
        @endif
    </div>
    @unless($article->contentareas->isEmpty())
    <article>Area:
        @foreach($article->contentareas as $contentArea)
            {{$contentArea->title}}
        @endforeach
    </article>
    @endunless

    @if($article->all_pages == 0)
        <div>Page: Unassigned</div>
    @endif
    @if($article->all_pages == 1)
        @unless($article->pages->isEmpty())
            <div>Page:
                @foreach($article->pages as $page)
                    {{$page->title}}
                @endforeach
            </div>
        @endunless
    @endif

    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>

    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\ArticlesController@destroy', $article->id]]) !!}
        {!! Form::submit('Delete this Article?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

    <div class="col-md-1 text-right">
        {!! Form::open(['method' => 'GET', 'action' => ['Admin\ArticlesController@archive', $article->id]]) !!}
        {!! Form::submit('Archive', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>





@stop