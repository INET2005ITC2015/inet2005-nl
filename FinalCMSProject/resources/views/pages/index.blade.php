@extends('app')

@section('content')


    <h1>Pages</h1>

    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create New Page</a>


    @foreach($pages as $page)
        <article>
            <h2>
                <a href="{{action('PagesController@show',[$page->id])}}"> {{$page->title}}</a>
            </h2>
            <h3>Alias: {{$page->alias}}</h3>

            <div class="description">{{$page->description}}</div>
            @unless($page->articles->isEmpty())
            <div>Assigned Articles:
                <ul>@foreach($page->articles as $article)
                        <li>{{$article->title}} on {{$article->contentAreas()->title}}</li>
                    @endforeach
                </ul>
            </div>
            @endunless

        </article>
    @endforeach
@stop