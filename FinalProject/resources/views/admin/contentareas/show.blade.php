@extends('app')

@section('content')

    <h1>{{$contentArea->title}}</h1>

    <h4>{{$contentArea->alias}}</h4>

    <article>
        {{$contentArea->description}}
    </article>
    <div> Display Order: {{$contentArea->display_order}}</div>
    <br/><br/>
    <a href="{{ route('admin.contentareas.edit', $contentArea->id) }}" class="btn btn-primary">Edit Content Area</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\ContentAreasController@destroy', $contentArea->id]]) !!}
            {!! Form::submit('Delete this Content Area?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop