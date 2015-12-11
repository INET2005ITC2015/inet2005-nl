@extends('app')

@section('content')

    <h1>Name: {{$user->name}}</h1>

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

    <br/><br/>
    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    <div class="col-md-6 text-right">
        {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\UsersController@destroy', $user->id]]) !!}
            {!! Form::submit('Delete this User?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop