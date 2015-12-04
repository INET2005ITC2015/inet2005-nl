@extends('app')

@section('content')

    <h1>Edit: {!!$cssTemplate->title!!}</h1>

    <hr/>
    {!!Form::model($cssTemplate, ['method'=>'PATCH','action'=> ['CSSTemplatesController@update', $cssTemplate->id]])!!}
    @include('csstemplates.form',['submitButtonText'=> 'Update The Template'])
    {!!Form::close()!!}

    @include('errors.list')
@stop