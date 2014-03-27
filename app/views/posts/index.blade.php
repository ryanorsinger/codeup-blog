@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Welcome to my Blog</h1>
@stop

@section('content')
	@foreach($posts as $post)
	<div class="col-md-10">
	<div class="blog-post">
		<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
			<p class="blog-post-meta">{{{ $post->created_at }}} </p>

				<p> {{{ $post->body }}} </p>
				<hr>			
	</div>
	</div>
	@endforeach
	<hr>
	<p>
		<a href="{{{ action('PostsController@create') }}}">Create New Post</a>
	</p>


<!-- <div class="blog-post">
	<form method="post" role="form" action="{{{ action('PostsController@store') }}}">
		<div class="form-group">
			<label for="postTitle">Title</label>
			<input type="text" class="form-control" id="postTitle" name="title"placeholder="Post title" value="{{{ Input::old('title') }}}">
		</div>
		
		<label for="postContent">Body</lablel>
		<textarea class="form-control" id="postContent" name="body" rows="5">{{{ Input::old('body') }}}</textarea>
		<button type="submit" class="btn btn-default">Create Post</button>
	</form>
</div> -->
@stop
