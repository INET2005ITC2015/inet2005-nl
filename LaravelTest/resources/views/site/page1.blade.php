<!DOCTYPE html>
<html>
<style type="text/css">
    @foreach ($cssTemplates as $cssTemplate)
    {{$cssTemplate->css_content}}
    @endforeach
</style>

@foreach ($contentAreas as $area)
    <div id='{{$area->alias}}'>
        @foreach ($pages as $page)
            <title>{{$page->title}}</title>
            <h2>{{$page->title}}</h2>
        @endforeach
            {{--@foreach ($articles as $article)--}}
            {{--<article id='{{$article->alias}}'>--}}
                {{--{{$article->html_content}}--}}
            {{--</article>--}}
            {{--@endforeach--}}
    </div>

@endforeach



</html>