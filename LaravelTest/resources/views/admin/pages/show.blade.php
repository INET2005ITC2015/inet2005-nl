@extends('app')

@section('content')

    <h1>{{$page->title}}</h1>

    <h4>{{$page->alias}}</h4>

    <article>
        {{$page->description}}
    </article>
    <div>Created By : {{ $page->user->first_name }} {{ $page->user->last_name }}</div>
    <div>Created At : {{ $page->created_at->format('M d,Y \a\t h:i a') }}</div>
    @if(($page->modified_by != $page->created_by) or ($page->modified_by == $page->created_by))
        <div>Modified By: {{ $fName }} {{ $lName }} </div>
    @endif
    <div>Modified At: {{ $page->updated_at->format('M d,Y \a\t h:i a') }}</div>
    <br/><br/>
    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary">Edit Page</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\PagesController@destroy', $page->id]]) !!}
            {!! Form::submit('Delete this page?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop