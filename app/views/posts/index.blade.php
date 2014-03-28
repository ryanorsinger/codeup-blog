@extends('layouts.master')

<style>
		h1, #main-content {
			margin-top: 25px;
			margin-left: 55px;
		}
	</style>

@section('content')
	
<div class="container" id="main-content">
	

	<h1 class="blog-title">Welcome to my Blog</h1>
	<div class="col-md-10">
	@foreach($posts as $post)	
	<div class="blog-post">
		<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h2>
			<p class="blog-post-meta">Written at {{ $post->created_at }} by Ryan &nbsp;|&nbsp; <a href="{{ action('PostsController@edit', $post->id )}}">Edit Post</a></p>
				<p> {{{ $post->body }}} </p>
				<hr>			
	</div>
	
	@endforeach
	</div>
		<div class="col-md-3">
		<h2><a href="{{{ action('PostsController@create') }}}">Create New Post</a></h2>
		<p>{{ $posts->links() }}</p>	
	</div>
</div>
	<hr>
	<p>
	</p>



@stop
