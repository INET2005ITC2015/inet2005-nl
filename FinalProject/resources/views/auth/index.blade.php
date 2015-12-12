@extends('app')

@section('content')

    <h1>Users</h1>

    <a href="{{ route('auth.register') }}" class="btn btn-primary">Create a User</a>
    @foreach($users as $user)
        <article>
            <h2>
                <a href="{{action('Auth\AuthController@getRegister',[$user->id])}}"> Name: {{$user->name}}</a>
            </h2>
           </article>

    @endforeach
@stop