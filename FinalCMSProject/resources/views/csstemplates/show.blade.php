@extends('app')

@section('content')

    <h1>{{$cssTemplate->title}}</h1>

    <h4>{{$cssTemplate->alias}}</h4>

    <article>
        {{$cssTemplate->description}}
    </article>
    <div> @if($cssTemplate->active == 1)
        Active: Yes
    @endif
    @if($cssTemplate->active == 0)
        Active: No
        @endif
    </div>
    <br/><br/>
    <a href="{{ route('csstemplates.edit', $cssTemplate->id) }}" class="btn btn-primary">Edit This Template</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['CSSTemplatesController@destroy', $cssTemplate->id]]) !!}
            {!! Form::submit('Delete this Template?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop