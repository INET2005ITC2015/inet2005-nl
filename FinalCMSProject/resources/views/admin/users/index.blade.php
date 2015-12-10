@extends('app')

@section('content')


    <h1>Users</h1>

    <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>


    @foreach($users as $user)
        <article>
            <h2>
                <a href="{{action('Admin/UsersController@show',[$user->id])}}"> {{$user->name}}</a>

                <h4>Email Address: {{$user->email}}</h4>

                <article>
                    Password: {{$user->password}}
                </article>

                @unless($user->roles->isEmpty())
                    <article>Role:
                        <ul>
                            @foreach($user->roles as $role)
                                <li>{{$role->name}}</li>
                            @endforeach
                        </ul>

                    </article>
                @endunless
            </h2>

        </article>
    @endforeach
@stop