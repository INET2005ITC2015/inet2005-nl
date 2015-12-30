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
    {!!Form::label('active', 'Active:') !!}
    {!!Form::select('active',  ['0' => 'No', '1' => 'Yes'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('css_content', 'CSS Content:') !!}
    {!!Form::textarea('css_content', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!!Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>

