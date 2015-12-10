@extends('app')

@section('content')

    <h1>Create a New Content Area</h1>

    <hr/>
    {!!Form::model($contentArea = new \App\ContentArea,['url'=> 'contentareas'])!!}
    @include('contentareas.form',['submitButtonText'=> 'Add Content Area'])
    {!!Form::close()!!}

    @include('errors.list')

@stop