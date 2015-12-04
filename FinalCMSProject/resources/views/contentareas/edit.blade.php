@extends('app')

@section('content')

    <h1>Edit: {!!$contentArea->title!!}</h1>

    <hr/>
    {!!Form::model($contentArea, ['method'=>'PATCH','action'=> ['ContentAreasController@update', $contentArea->id]])!!}
    @include('contentareas.form',['submitButtonText'=> 'Update The Content Area'])
    {!!Form::close()!!}

    @include('errors.list')
@stop