<!DOCTYPE html>
<html>
<head>
    <title>Main Site</title>
        <style type="text/css">
            {{$cssTemplate->css_content}}
        </style>
</head>
<body>
<header>
    {{--<h1>{{$page->title}}></h1>--}}
</header>
<nav>
    <ul>
        {{--@foreach ($pages as $page)--}}
            <li><a href='index.blade.php?page={{$page->alias}}'>{{$page->title}}</a></li>
        {{--@endforeach--}}
    </ul>
</nav>
<section>
    {{--@foreach ($contentAreas as $area)--}}
    <div id='{{$contentArea->alias}}'>
        {{--@foreach ($articles as $article)--}}
            <article id='{{$article->alias}}'>
             {{$article->html_content}}
            </article>
        {{--@endforeach--}}
    </div>
    {{--@endforeach--}}
</section>
</body>
</html>


