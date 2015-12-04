@extends('app')

@section('content')

    <h1>Create a New CSS Template</h1>

    <hr/>
    {!!Form::open(['url'=> 'csstemplates'])!!}
    @include('csstemplates.form',['submitButtonText'=> 'Add a CSS Template'])
    {!!Form::close()!!}

    @include('errors.list')

@stop