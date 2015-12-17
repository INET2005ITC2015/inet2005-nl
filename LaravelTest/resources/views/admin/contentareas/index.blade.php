@extends('app')

@section('content')


    <h1>Content Area</h1>


    <a href="{{ route('admin.contentareas.create') }}" class="btn btn-primary">Create a New Content Area</a>


    @foreach($contentAreas as $contentArea)
        <article>
            <h2>
                <a href="{{action('Admin\ContentAreasController@show',[$contentArea->id])}}"> {{$contentArea->title}}</a>
            </h2>
            <h3>Alias: {{$contentArea->alias}}</h3>

            <div class="description">Description: {{$contentArea->description}}</div>
            <div> Display Order: {{$contentArea->display_order}}</div>

            @unless($contentArea->articles->isEmpty())
                <div>Assigned Articles:
                    <ul>@foreach($contentArea->articles as $article)
                            <li>{{$article->title}}</li>
                        @endforeach
                    </ul>
                    @unless($article->pages->isEmpty())
                        <div>Assigned Pages:
                            <ul>@foreach($article->pages as $page)
                                    <li>{{$page->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endunless
            </div>

            @endunless
            <div>Created By:{{ $contentArea->user->first_name }} {{ $contentArea->user->last_name }}</div>
            <div>Created At: {{ $contentArea->created_at->format('M d,Y \a\t h:i a') }}</div>
            <div>Modified By:{{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
            <div>Modified At:{{ $contentArea->updated_at->format('M d,Y \a\t h:i a') }}</div>

        </article>
    @endforeach
@stop