@extends('app')

@section('content')


    <h1>Content Area</h1>

    <a href="{{ route('contentareas.create') }}" class="btn btn-primary">Create a New Content Area</a>


    @foreach($contentAreas as $contentArea)
        <article>
            <h2>
                <a href="{{action('ContentAreasController@show',[$contentArea->id])}}"> {{$contentArea->title}}</a>
            </h2>
            <h3>Alias: {{$contentArea->alias}}</h3>

            <div class="description">Description: {{$contentArea->description}}</div>
            <div> Display Order: {{$contentArea->display_order}}</div>

        </article>
    @endforeach
@stop