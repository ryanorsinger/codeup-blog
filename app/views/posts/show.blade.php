@extends('layouts.master')

<!-- @section('header')
	<h1 class="blog-title">{{{ $post->title }}}</h1>
@stop -->

@section('content')
	
	<div class="col-md-10">
	<div class="blog-post">
		<h2 class="blog-post-title">{{{ $post->title }}}</h2>
			<p class="blog-post-meta">{{{ $post->created_at }}} </p>
			<h4><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit this post</a></h4>
				<p> {{{ $post->body }}} </p>
				<hr>			
	</div>
	</div>


<hr>
<p><a href="{{{ action('PostsController@index') }}}">Return to posts list</a></p>

@stop
<!-- @section('content')
<div class="blog-post">
	<form method="post" role="form" action="{{{ action('PostsController@store') }}}">
		<div class="form-group">
    		<label for="postTitle">Title</label>
    		<input type="text" class="form-control" id="postTitle" name="title"placeholder="Post title" value="{{{ Input::old('title') }}}">
		</div>
  		
  		<label for="postContent">Body</lablel>
  		<textarea class="form-control" id="postContent" name="body" rows="5">{{{ Input::old('body') }}}</textarea>
		<button type="submit" class="btn btn-default">Create Post</button>
	</form>
</div>
@stop -->
