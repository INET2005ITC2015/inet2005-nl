@extends('app')

@section('content')


    <h1>Pages</h1>

    @if(Auth::user() && Auth::user()->is_editor())
    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Create New Page</a>

   @endif
        @foreach($pages as $page)
            <article>
                <h2>
                    @if(Auth::user() && Auth::user()->is_editor())
                    <a href="{{action('Admin\PagesController@show',[$page->id])}}">Title: {{$page->title}}</a>
                    @else
                        Title: {{$page->title}}
                    @endif
                </h2>
                <h3>Alias: {{$page->alias}}</h3>
                <div>Created By:{{ $page->user->first_name }} {{ $page->user->last_name }}</div>
                <div>Created At: {{ $page->created_at->format('M d,Y \a\t h:i a') }}</div>
                @if($page->modified_by)
                <div>Modified By: {{ $page->modified_by }} </div>
                @endif
                <div>Modified At: {{ $page->updated_at->format('M d,Y \a\t h:i a') }}</div>
                <div class="description">{{$page->description}}</div>
                @unless($page->articles->isEmpty())
                <div>Assigned Articles:
                    <ul>@foreach($page->articles as $article)
                            <li>{{$article->title}}</li>
                        @endforeach
                    </ul>
                </div>
                @endunless

            </article>
        @endforeach

@stop