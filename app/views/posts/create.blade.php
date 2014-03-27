@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Create a New Post</h1>
@stop

@section('content')
<div class="blog-post">
	<form method="post" role="form" action="{{{ action('PostsController@store') }}}">

		    <label for="postTitle">Title</label>
		    <input type="text" class="form-control" id="postTitle" name="title"placeholder="Post title" value="{{{ Input::old('title') }}}">
  			{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span><p>') : ''}}
  		<label for="postContent">Body</lablel>
  		<textarea class="form-control" id="postContent" name="body" rows="5">{{{ Input::old('body') }}}</textarea>
 			{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span><p>') : ''}}

		<button type="submit" class="btn btn-default">Create Post</button>
	</form>
</div>
@stop
