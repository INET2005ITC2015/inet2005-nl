@extends('app')

@section('content')

    <h1>Name: {{$user->first_name}}  {{$user->last_name}}</h1>

    <h4>Email Address: {{$user->email}}</h4>

    <article>
        Password: {{$user->password}}
    </article>

    @unless($user->permissions->isEmpty())
        <article>Permissions:
            <ul>
                @foreach($user->permissions as $permission)
                    <li>{{$permission->name}}</li>
                @endforeach
            </ul>

        </article>
    @endunless

    <br/><br/>
    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\UsersController@destroy', $user->id]]) !!}
            {!! Form::submit('Delete this User?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop