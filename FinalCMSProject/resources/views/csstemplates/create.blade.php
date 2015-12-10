@extends('app')

@section('content')

    <h1>Create a CSS Template</h1>

    <hr/>
    {!!Form::model($cssTemplate = new \App\CSSTemplate,['url'=> 'csstemplates'])!!}
    @include('csstemplates.form',['submitButtonText'=> 'Add a Template'])
    {!!Form::close()!!}

    @include('errors.list')

@stop