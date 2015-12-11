@extends('app')

@section('content')

    <h1>{{$page->title}}</h1>

    <h4>{{$page->alias}}</h4>

    <article>
        {{$page->description}}
    </article>
    <br/><br/>
    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary">Edit Page</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\PagesController@destroy', $page->id]]) !!}
            {!! Form::submit('Delete this page?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop