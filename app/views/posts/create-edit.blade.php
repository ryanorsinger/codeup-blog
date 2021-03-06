@extends('layouts.master')

@section('content')
<div class="container">

@if (empty($post->id))
	<h1 class="page-header">Create a New Post</h1>
	<hr>
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
@else
	<h1 class="page=header">Edit Post</h1>
	<div class="form-group {{ $errors->has('title') ? 'has error' : ''}}">
	{{ Form::model($post, (array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal'))) }}
@endif

	<div class="col-lg-8">	
	{{ Form::label('title', 'Title', array('class' => '')) }}
	{{ Form::text('title', null, array('class' => 'form-control', 'placeholder'=>'Title')) }}
	{{ $errors->first('title', '<p><span class="help-block">:message</span><p>') }}
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', null , array('class' => 'form-control')) }}
	{{ $errors->first('body', '<p><span class="help-block">:message</span><p>') }}
	<p> {{ Form::file('name', array('class' => '')) }} </p>
	
@if (empty($post->id))
	<button type="submit" class="btn btn-default">Create New Post</button>	
@else
	<button type="submit" class="btn btn-default">Save Changes</button>
@endif
		
	{{ Form::close() }}
</div>
</div>	
</div>
</div>
</div>
</div>
</div>


@stop


