<h1>Test form</h1>

{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

{{ Form::close() }}