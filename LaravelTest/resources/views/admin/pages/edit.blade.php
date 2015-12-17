@extends('app')

@section('content')

    <h1>Edit: {!!$page->title!!}</h1>

    <hr/>
    {!!Form::model($page, ['method'=>'PATCH','action'=> ['Admin\PagesController@update', $page->id]])!!}
    @include('admin.pages.form',['name'=>'modified_by','submitButtonText'=> 'Update Page'])
    {!!Form::close()!!}

    @include('errors.list')
@stop