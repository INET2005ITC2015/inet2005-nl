@extends('app')

@section('content')

    <h1>Create a New Article</h1>

    <hr/>
    {!!Form::model($article = new \App\Article,['url'=> 'admin/articles'])!!}
     @include('admin.articles.form',['name'=>'created_by','submitButtonText'=> 'Add Article'])
    {!!Form::close()!!}

    @include('errors.list')
@stop