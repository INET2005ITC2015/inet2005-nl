@extends('app')

@section('content')

    <h1>Create a New User</h1>

    <hr/>
    {!!Form::model($user = new \App\User,['url'=> 'users'])!!}
    @include('users.form',['submitButtonText'=> 'Add User'])
    {!!Form::close()!!}

  @include('errors.list')

@stop