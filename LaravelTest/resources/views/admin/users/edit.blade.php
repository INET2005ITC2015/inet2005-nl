@extends('app')

@section('content')

    <h1>Edit: {!!$user->name!!}</h1>

    <hr/>
    {!!Form::model($user, ['method'=>'PATCH','action'=> ['Admin\UsersController@update', $user->id]])!!}
    @include('admin.users.form',['submitButtonText'=> 'Update User'])
    {!!Form::close()!!}

    @include('errors.list')
@stop