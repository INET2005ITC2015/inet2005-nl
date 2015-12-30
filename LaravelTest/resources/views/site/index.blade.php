<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    @foreach ($cssTemplates as $cssTemplate)
    {{$cssTemplate->css_content}}
    @endforeach
</style>

    @foreach ($pages as $page)
        <title>{{$page->title}}</title>
    @endforeach
</head>
    @foreach ($contentAreas as $area)
        <div id='{{$area->alias}}'>
           {{--@foreach($articles as $article)--}}

            {{--@endforeach--}}
            @foreach($area->articles as $article)
                @foreach($article->pages as $page)
                    <ul>
                        <li><h2><a href='index.blade.php?page={{$page->alias}}'>{{$page->title}}</a></h2></li>
                    </ul>
                @endforeach
                <article id='{{$article->alias}}'>
                    {!! $article->html_content !!}
                </article>
            @endforeach
        </div>
    @endforeach



</html>