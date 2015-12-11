@extends('app')

@section('content')

    <h1>Edit: {!!$contentArea->title!!}</h1>

    <hr/>
    {!!Form::model($contentArea, ['method'=>'PATCH','action'=> ['Admin\ContentAreasController@update', $contentArea->id]])!!}
    @include('admin.contentareas.form',['submitButtonText'=> 'Update The Content Area'])
    {!!Form::close()!!}

    @include('errors.list')
@stop