@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Create a New Post</h1>
@stop

@section('content')
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
@stop
