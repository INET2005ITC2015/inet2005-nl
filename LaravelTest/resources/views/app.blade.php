<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Roboto:400,300' >
    <link rel='stylesheet' type='text/css' href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/css/select2.min.css"  />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


	<![endif]-->
</head>
<body>
    @include('partials.nav')

    <div class="container">
        @include ('flash::message')

	    @yield('content')
    </div>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();

        //$('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

	<!-- Scripts -->

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/js/select2.min.js"></script>
    @yield('footer')


</body>
</html>
