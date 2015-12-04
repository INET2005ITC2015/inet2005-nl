@extends('app')

@section('content')


    <h1>CSS Template</h1>

    <a href="{{ route('csstemplates.create') }}" class="btn btn-primary">Create a CSS Template</a>


    @foreach($cssTemplates as $cssTemplate)
        <article>
            <h2>
                <a href="{{action('CSSTemplatesController@show',[$cssTemplate->id])}}"> {{$cssTemplate->title}}</a>
            </h2>
            <h3>Alias: {{$cssTemplate->alias}}</h3>

            <div class="description">Description: {{$cssTemplate->description}}</div>
            <div> Active Status: {{$cssTemplate->active}}</div>

        </article>
    @endforeach
@stop