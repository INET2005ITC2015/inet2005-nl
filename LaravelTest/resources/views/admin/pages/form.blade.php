{{--{!!Form::hidden($name, Auth::id()) !!}--}}
<div class="form-group">
    {!!Form::label('title', 'Title:') !!}
    {!!Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('alias', 'Alias:') !!}
    {!!Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('description', 'Description:') !!}
    {!!Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>

<!--@section('footer')
    <script>
            $('select').select2({
                placeholder: 'Choose a tag'
            });

    </script>
@endsection