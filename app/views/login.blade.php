@extends('layouts.master')

@section('header')
@stop

@section('content')

		{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
		<h2 class="form-signin-heading">Please sign in</h2>
		{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'email address', 'autofocus', 'required')) }}

		{{ $errors->first('email', '<p><span class="help-block">:message</span><p>') }}

		{{ Form::password('password', array('class' => 'form-control', ' placeholder' => 'password', 'required')) }}

		{{ $errors->first('password', '<p><span class="help-block">:message</span><p>') }}


		<p>{{ Form::checkbox('remember', 'remember') }} &nbsp; remember me </p>

        {{ Form::submit('Sign In', array('class' => "btn btn-lg btn-primary btn-block")) }}
		{{ Form::close() }}

@stop