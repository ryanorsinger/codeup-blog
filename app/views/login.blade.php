@extends('layout.master')

@section('header')
@stop

@section('content')

<<<<<<< HEAD
{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
=======


<form class="form-signin" role="form">
>>>>>>> test
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
<<<<<<< HEAD
          <input name="remember" type="checkbox" value="remember-me"> Remember me
=======
          <input type="checkbox" value="remember-me"> Remember me
>>>>>>> test
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

<<<<<<< HEAD
=======

>>>>>>> test
@stop
