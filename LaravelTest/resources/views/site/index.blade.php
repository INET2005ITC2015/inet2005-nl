<!DOCTYPE html>
<html>
<head>
    <title>{{ $currentPage->title}}</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <style type="text/css">
        {{$currentTemplate->css_content}}
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/site') }}">Main Site</a></li>

                    @if (!Auth::guest())
                        <li><a href="#">{{ Auth::user()->first_name}}  {{Auth::user()->last_name }}</a></li>
                    @endif
                </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                @endif
                @if (!Auth::guest())
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>
<div class="container">

<header>
    <h1>{{$currentPage->title}}</h1>
</header>
<nav><ul>
        @foreach($pages as $page)

            <li>
                <a href="{{ url("/site/" . $page->alias) }}">{{$page->title}}</a>
            </li>
        @endforeach
    </ul></nav>


    <section>
    @foreach($areas as $area)

        <div id='{{$area->alias}}'>
           @foreach($currentPage->articles as $article)
                    @foreach($article->contentAreas as $cArea)
                        @if($area->id == $cArea->id)
                           <div id='{{$article->alias}}'>
                              {!! $article->html_content !!}
                           </div>
                            @if(Auth::user() &&  Auth::user()->is_author())
                                <a href="{{ route('site.index') }}" class="btn btn-primary">Edit this Article</a>
                            @endif
                        @endif
                    @endforeach
            @endforeach
        </div>
        @endforeach
    </section>

</div>

</body>
</html>
