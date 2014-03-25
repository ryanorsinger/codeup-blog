@extends('layouts.blog.master')

@section('topscript')
@stop

@section('content')
	@if (!empty($name))
		<h1>Hello {{{ $name }}}</h1>
	@else
    	<h1>You must have a name, right?</h1>
	@endif
@stop



@section('bottomscript')
	<script>
		// alert('this is the javascript in the bottomscript');
	</script>
@stop
