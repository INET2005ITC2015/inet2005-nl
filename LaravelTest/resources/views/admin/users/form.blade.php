{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--{!!Form::hidden(_token, ['value'=>'{{ csrf_token() }}'])!!}--}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {!!Form::label('first_name', 'First Name:') !!}
    {!!Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('last_name', 'Last Name:') !!}
    {!!Form::text('last_name', null, ['class' => 'form-control']) !!}
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
    {!!Form::label('permission_list', 'Permission:') !!}
    {!!Form::select('permission_list[]',  $permissions, null, ['id'=>'permission_list', 'class' => 'form-control', 'multiple']) !!}
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