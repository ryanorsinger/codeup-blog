<!doctype html>
<html lang="en">
<head>
		<title>PageTitle</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/flatly.css">
		<link href="/css/signin.css" rel="stylesheet">

		@yield('headerscript')
		
</head>
<body>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Ryan Orsinger</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
					<li><a href="{{{ action('HomeController@showPortfolio') }}}"> Portfolio </a></li>
					<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
					<li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
						
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::check())
				<li><a href="{{{ action('HomeController@logout') }}}">Logout ({{ Auth::user()->username }})</a></li>
				@else
				<li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
				@endif

				<li><a href="http://www.GitHub.com/RyanOrsinger "><i class="fa fa-github"></i> GitHub</a></li>
				<li><a href="http://www.linkedin.com/in/ryanorsinger"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
				<li><a href="twitter.com/orsinger"><i class="fa fa-twitter"></i> Twitter</a></li>
		<li><a href="https://plus.google.com/+RyanOrsinger/posts"<i class="fa fa-google-plus-square"></i> Google+</a></li>
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li> -->
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
</div>


@yield('content')


	@if (Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	@if (Session::has('loginBad'))
		<div class="alert alert-danger">{{{ Session::get('loginBad') }}}</div>
	@endif

@yield('bottomscript')
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</script>
</body>
</html>