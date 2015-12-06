@extends('app')

@section('content')

    <h3>Main Site Developed in Laravel</h3>
    @foreach($pages as $page)
        <h4><div><a href="#">{{$page->title}}</a></div></h4>
    @endforeach
@stop