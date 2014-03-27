@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Create a New Post</h1>
@stop

@section('content')
<section class="blog-post">
	{{ Form::open(array('action' => 'PostsController@edit', 
						'class' => 'form-horizontal')) }}
	
	<div class="form-group {{ $errors->has('title') ? 'has error' : ''}}">
	{{ Form::label('title', 'Title', array('class' => 'control-label col-sm-2')) }}
	
	{{ Form::text('title', null, array('class' => 'form-control', 'placeholder'=>'Post Title')) }}

	{{ $errors->first('title', '<p><span class="help-block">:message</span><p>') }}
	
	{{ Form::label('body', 'Body') }}
	
	{{ Form::textarea('body', null , array('class' => 'form-control')) }}

	{{ $errors->first('body', '<p><span class="help-block">:message</span><p>') }}

	<button type="submit" class="btn btn-default">Create Post</button>
		   
		
	{{ Form::close() }}
</div>
</div>
</div>
</div>
</div>
</div>

</section>
@stop


