<nav>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/articles') }}">Articles</a></li>
                @if (!Auth::guest())<li><a href="{{ url('/auth/logout') }}">Logout</a></li>@endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    </ul>
                @else
                    <ul class="nav navbar-nav navbar-right"> <li >{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</li>
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>