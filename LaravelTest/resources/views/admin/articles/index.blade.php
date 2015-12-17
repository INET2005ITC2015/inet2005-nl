@extends('app')

@section('content')

    <h1>Articles</h1>


    @if(Auth::user()->hasPermission('editor') || Auth::user()->hasPermission('admin'))
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Create a New Article</a>
    @endif
    {{--@else--}}
    @foreach($articles as $value=>$article)
        <article>
            <h2>

                <a href="{{action('Admin\ArticlesController@show',[$article->id])}}"> Title: {{$article->title}}</a>
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
            <div>Created By:{{ $article->user->first_name }} {{ $article->user->last_name }}</div>
            <div>Created At: {{ $article->created_at->format('M d,Y \a\t h:i a') }}</div>
            <div>Modified By:{{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
            <div>Modified At:{{ $article->updated_at->format('M d,Y \a\t h:i a') }}</div>
        </article>
    @endforeach
    {{--@endif--}}
@stop