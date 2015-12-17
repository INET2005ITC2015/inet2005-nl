<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/css/select2.min.css"  />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/sites') }}">Main Site</a></li>
            </ul>
            {{--&& Auth::user()->hasPermission('admin')--}}
            @if(Auth::user())
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('admin/users') }}">User</a></li>
                    <li><a href="{{ url('admin/pages') }}">Pages</a></li>
                    <li><a href="{{ url('admin/contentareas') }}">Content Areas</a></li>
                    <li><a href="{{ url('admin/articles') }}">Articles</a></li>
                    <li><a href="{{ url('admin/csstemplates') }}">CSS Templates</a></li>

                </ul>
            @endif
            {{--@if (Auth::user() && Auth::user()->hasPermission('editor'))--}}
                {{--<ul class="nav navbar-nav">--}}
                {{--<li><a href="{{ url('admin/pages') }}">Pages</a></li>--}}
                {{--<li><a href="{{ url('admin/contentareas') }}">Content Areas</a></li>--}}
                {{--<li><a href="{{ url('admin/articles') }}">Articles</a></li>--}}
                {{--<li><a href="{{ url('admin/csstemplates') }}">CSS Templates</a></li>--}}

                {{--</ul>--}}
                {{--@endif--}}

            {{--@if (Auth::user() && )--}}
            {{--<ul class="nav navbar-nav">--}}

            {{--<li><a href="{{ url('admin/users') }}">User</a></li>--}}
            {{--<li><a href="{{ url('admin/pages') }}">Pages</a></li>--}}
            {{--<li><a href="{{ url('admin/contentareas') }}">Content Areas</a></li>--}}
            {{--<li><a href="{{ url('admin/articles') }}">Articles</a></li>--}}
            {{--<li><a href="{{ url('admin/csstemplates') }}">CSS Templates</a></li>--}}

            {{--</ul>--}}
            {{--@endif--}}



            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name}}  {{Auth::user()->last_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @if (!Auth::guest())
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<div class="container">

    @include('flash::message')
    @yield('content')
</div>


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#htmlContent',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        //toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        visualblocks_default_state: true,
        end_container_on_empty_block: true
    });
</script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/js/select2.min.js"></script>
@yield('footer')
</body>
</html>
