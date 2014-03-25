<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
	@yield('topscript')
</head>
<body>
	<div id="wrap">
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav">
        	<li><a href="resume.html">Resume</a></li>
        	<!-- <li class="active"><a href="resume.html">Resume</a></li> -->
        	<li><a href="portfolio.html"> Portfolio </a></li>
   	 	</ul>
      <ul class="nav navbar-nav navbar-right">
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


    @yield('content')
    

	




    @yield('bottomscript')
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</script>
</body>
</html>