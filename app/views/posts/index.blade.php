@extends('layouts.master')

<style>
		h1, #main-content {
			margin-top: 25px;
			margin-left: 55px;
		}
	</style>

@section('content')
<div class="container" id="main-content">
<div class="row">
		<div class="col-md-8">
		@foreach($posts as $post)	
			<!-- blog entry -->
			<div class="blog-post">
			<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h2>
			<p>written by Ryan</p>
			<p><span class="glyphicon glyphicon-time"></span> created {{ $post->created_at->format('l, F jS Y @ h:i:s A') }}</p>
			<p class="blog-post-meta"><a href="{{ action('PostsController@edit', $post->id )}}">Edit Post</a></p>
				<p> {{{ $post->body }}} </p>
				</div>
				<hr>			
	@endforeach
	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	</div>
	<!-- right side column menu -->
		<div class="col-md-4">
		<div class="well">
			<h4>Blog Search</h4>
			{{ Form::open(array('action' => array('PostsController@index'), 'class' => 'form-horizontal', 'method' => 'GET')) }}

			<!-- {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }} -->
			<div class="input-group">
			{{ Form::text('search', null) }}

			{{ Form::submit('Search') }}

			<!-- <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </span> -->

			{{ Form:: close() }}
	</div>
	</div>



		<div class="well">
			<h2><a href="{{{ action('PostsController@create') }}}">Create New Post</a></h2>
			
		</div>


</div>
</div>
</div>

@stop
