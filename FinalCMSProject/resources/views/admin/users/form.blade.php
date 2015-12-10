{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--{!!Form::hidden(_token, ['value'=>'{{ csrf_token() }}'])!!}--}}
<div class="form-group">
    {!!Form::label('name', 'Name:') !!}
    {!!Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('email', 'Email Address:') !!}
    {!!Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('password', 'Enter Password:') !!}
    {!!Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('confirm_password', 'Confirm Password:') !!}
    {!!Form::password('confirm_password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('role_list', 'Role:') !!}
    {!!Form::select('role_list[]',  $roles, null, ['id'=>'role_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!!Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>

@section('footer')
    <script>
            $('select').select2({
                placeholder: 'Choose a Role'
            });

    </script>
@endsection