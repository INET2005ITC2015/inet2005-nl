{{--<input type="hidden" name="created_by" value="{{Auth::id() }}">--}}
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
    {!!Form::label('all_pages', 'All Pages:') !!}
    {!!Form::select('all_pages',  ['0' => 'No', '1' => 'Yes'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('page_list', 'Pages:') !!}
    {!!Form::select('page_list[]',  array_merge(['100000' => 'Unassigned'], $page_id), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('area_list', 'Content Area:') !!}
    {!!Form::select('area_list[]',  $area_id, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('html_content', 'HTML Content:') !!}
    {!!Form::textarea('html_content', null, ['id' => 'htmlContent', 'class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!!Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>

