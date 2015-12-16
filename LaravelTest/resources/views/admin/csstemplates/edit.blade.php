@extends('app')

@section('content')

    <h1>Edit: {!!$cssTemplate->title!!}</h1>

    <hr/>
    {!!Form::model($cssTemplate, ['method'=>'PATCH','action'=> ['Admin\CSSTemplatesController@update', $cssTemplate->id]])!!}
    @include('admin.csstemplates.form',['submitButtonText'=> 'Update The Template'])
    {!!Form::close()!!}

    @include('errors.list')
@stop