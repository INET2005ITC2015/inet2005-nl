@extends('app')

@section('content')

    <h1>Articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create a New Article</a>
    @foreach($articles as $value=>$article)
        <article>
            <h2>
                <a href="{{action('ArticlesController@show',[$article->id])}}"> Title: {{$article->title}}</a>
            </h2>
            <h3>Alias: {{$article->alias}}</h3>
            <div>Description: {{$article->description}}</div>
            <div>@if($article->all_pages == 1)
                    All Pages: Yes
                 @endif
                @if($article->all_pages == 0)
                    All Pages: No
                @endif

            </div>
            @unless($article->contentAreas->isEmpty())
            <div>Area:
                    @foreach($article->contentAreas as $contentArea)
                        {{$contentArea->title}}
                    @endforeach
            </div>
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
            <div>{{$article->html_content}}</div>
            <div>Created At: {{$article->created_at}}</div>
            <div>Modified At: {{$article->updated_at}}</div>
        </article>
    @endforeach
@stop