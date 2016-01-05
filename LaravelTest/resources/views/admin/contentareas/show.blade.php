@extends('app')

@section('content')

    <h1>{{$contentArea->title}}</h1>

    <h4>{{$contentArea->alias}}</h4>

    <article>
        {{$contentArea->description}}
    </article>
    <div>Created By  : {{ $contentArea->user->first_name }} {{ $contentArea->user->last_name }}</div>
    <div>Created At  : {{ $contentArea->created_at->format('M d,Y \a\t h:i a') }}</div>
    @if(($contentArea->modified_by != $contentArea->created_by) or ($contentArea->modified_by == $contentArea->created_by))
        <div>Modified By: {{ $fName }} {{ $lName }} </div>
    @endif
    <div>Modified At : {{ $contentArea->updated_at->format('M d,Y \a\t h:i a') }}</div>
    <div> Display Order: {{$contentArea->display_order}}</div>
    <br/><br/>
    <a href="{{ route('admin.contentareas.edit', $contentArea->id) }}" class="btn btn-primary">Edit Content Area</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\ContentAreasController@destroy', $contentArea->id]]) !!}
            {!! Form::submit('Delete this Content Area?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop