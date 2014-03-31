@extends('layouts.master')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/flatly.css">

@section('topscript')
@stop
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/flatly.css">
@section('style'
	<style>
		
		.circular {
			width: 300px;
			height: 300px;
			border-radius: 150px;
			-webkit-border-radius: 150px;
			-moz-border-radius: 150px;  
			background: url('img/ryan_portrait.png') no-repeat;
		}
</style>
@stop

@section('content')
<div class="container" id="homepage container">
<h1></h1><div class="jumbotron">
  <h1>Meet Ryan Orsinger</h1>
  <p>Discover web applications and projects in this online portfolio</p>
  <p> 
  <p><a href="{{{ action('HomeController@showPortfolio') }}}" id="jumbo-portfolio-button" class="btn btn-primary btn-lg">Show me the apps!</a>
  <a href="{{{ action('HomeController@showResume') }}}" id="jumbo-resume-button" class="btn btn-primary btn-lg">Discover more about Ryan</a></p>
</div>
</div>
<div class="container"><h3>It seems like you are, or should be, friends with Ryan Orsinger</h3>
</div>
@stop


