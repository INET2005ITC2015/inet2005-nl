{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--<style type="text/css">--}}
    {{--@foreach ($cssTemplates as $cssTemplate)--}}
    {{--{{$cssTemplate->css_content}}--}}
    {{--@endforeach--}}
{{--</style>--}}

    {{--@foreach ($pages as $page)--}}
        {{--<title>{{$page->title}}</title>--}}
    {{--@endforeach--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
    {{--<h1>--}}
        {{--@foreach ($pages as $page)--}}
        {{--$page->title--}}
            {{--<br/>--}}
        {{--@endforeach--}}
    {{--</h1>--}}
{{--</header>--}}
{{--<nav>--}}
    {{--<ul>--}}
        {{--@foreach ($pages as $page)--}}
            {{--<li><h2><a href="{{action('SiteController@show',[$page->id])}}">?page={{$page->alias}}'>{{$page->title}}</a></h2></li>--}}
        {{--@endforeach--}}

    {{--</ul>--}}
{{--</nav>--}}
{{--<section>--}}
    {{--@foreach ($contentAreas as $area)--}}
        {{--<div id='{{$area->alias}}'>--}}
           {{--@foreach($articles as $article)--}}

            {{--@endforeach--}}
            {{--@foreach($area->articles as $article)--}}
                {{--@foreach($article->pages as $page)--}}
                       {{--<h2><a href='index.blade.php?page={{$page->alias}}'>{{$page->title}}</a></h2>--}}
                {{--@endforeach--}}
                {{--<article id='{{$article->alias}}'>--}}
                    {{--{!! $article->html_content !!}--}}
                {{--</article>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endforeach--}}

{{--</section>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html>
<head>
    <title>{{ $currentPage->title}}</title>
    <style type="text/css">
        {{$currentTemplate->css_content}}
    </style>
</head>
<body>
<header>
    <h1>{{$currentPage->title}}</h1>
</header>
<nav>
    <ul>
        @foreach($pages as $page)

            <li>
                <a href='/site/{{$page->alias}}'>{{$page->title}}</a>
            </li>
        @endforeach
    </ul>
</nav>
<section>
    @foreach ($areas as $area)
    <div id='{{$area->alias}}'>
    @foreach($articles as $article)

    @endforeach
    @foreach($area->articles as $article)
    @foreach($article->pages as $page)
    <h2>{{$page->title}}</h2>
    @endforeach
    <article id='{{$article->alias}}'>
    {!! $article->html_content !!}
    </article>
    @endforeach
    </div>
    @endforeach

    </section>
</body>
</html>