@extends('app')

@section('content')

    <h1>{{$cssTemplate->title}}</h1>

    <h4>{{$cssTemplate->alias}}</h4>

    <article>
        {{$cssTemplate->description}}
    </article>
    <div>Created By : {{ $cssTemplate->user->first_name }} {{ $cssTemplate->user->last_name }}</div>
    <div>Created At : {{ $cssTemplate->created_at->format('M d,Y \a\t h:i a') }}</div>
    <div>Modified By: {{$cssTemplate->modified_by}}</div>
    <div>Modified At: {{ $cssTemplate->updated_at->format('M d,Y \a\t h:i a') }}</div>
    <div> @if($cssTemplate->active == 1)
        Active: Yes
    @endif
    @if($cssTemplate->active == 0)
        Active: No
        @endif
    </div>
    <br/><br/>
    <a href="{{ route('admin.csstemplates.edit', $cssTemplate->id) }}" class="btn btn-primary">Edit This Template</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\CSSTemplatesController@destroy', $cssTemplate->id]]) !!}
            {!! Form::submit('Delete this Template?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop