@extends('app')

@section('content')


    <h1>Users</h1>

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create New User</a>


    @foreach($users as $user)
        <article>
            <h2>
                <a href="{{action('Admin\UsersController@show',[$user->id])}}"> {{$user->first_name}}  {{$user->last_name}}</a>

                <h4>Email Address: {{$user->email}}</h4>

                <article>
                    Password: {{$user->password}}
                </article>
                {{--<strong><div>Created By: {{ $user->first_name }} {{ $user->last_name }}</div></strong>--}}
                {{--<div>Created At: {{ $user->created_at->format('M d,Y \a\t h:i a') }}</div>--}}
                {{--@if(($user->modified_by != $user->created_by))--}}
                    {{--<div>Modified By: {{ $user->modified_by  }}</div>--}}
                {{--@endif--}}
                {{--<div>Modified At: {{ $user->updated_at->format('M d,Y \a\t h:i a') }}</div>--}}
                @unless($user->permissions->isEmpty())
                    <article>Permissions:
                        <ul>
                            @foreach($user->permissions as $permission)
                                <li>{{$permission->name}}</li>
                            @endforeach
                        </ul>

                    </article>
                @endunless
            </h2>

        </article>
    @endforeach
@stop