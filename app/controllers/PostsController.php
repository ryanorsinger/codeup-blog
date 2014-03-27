<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
   	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post, redirect to index when done
	        Log::info(Input::all());
		    $post = new Post();
		    $post->title = Input::get('title');
		    $post->body = Input::get('body');
		    $post->save();

	    return Redirect::action('PostsController@index');
	    }
	} 

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// show a post for /posts/show/id
		// $post = Post::findOrFail($id);
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "GET	/posts/{post}/edit	edit	Show a form for editing a specific post";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//$post = Post::find($id);
		//$post->title = "My new title";
		//$post->save();
		//return $post;

		return "PUT	/posts/{post}	update	Update a specific post";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		return "Delete request process successfull.";
	}

}