@extends('app')

@section('content')

    <h1>Edit: {!!$article->title!!}</h1>

    <hr/>
    {!!Form::model($article, ['method'=>'PATCH','action'=> ['Admin\ArticlesController@update', $article->id]])!!}
    @include('admin.articles.form',['name'=>'modified_by','submitButtonText'=> 'Update Article'])
    {!!Form::close()!!}

    @include('errors.list')
@stop