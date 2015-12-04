@extends('app')

@section('content')

    <h1>Create a New Page</h1>

    <hr/>
    {!!Form::open(['url'=> 'pages'])!!}
    @include('pages.form',['submitButtonText'=> 'Add Page'])
    {!!Form::close()!!}

    @include('errors.list')

@stop