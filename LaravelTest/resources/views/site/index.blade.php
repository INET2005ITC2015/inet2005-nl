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
                <ul>
                    <li><a href='index.blade.php?page={{$page->alias}}'>{{$page->title}}</a></li>
                </ul>
            @endforeach
            {{--@endforeach--}}
                {{--@foreach ($articles as $article)--}}
                    {{--<article id='{{$article->alias}}'>--}}
                        {{--{{$article->html_content}}--}}
                    {{--</article>--}}

        </div>

@endforeach



</html>