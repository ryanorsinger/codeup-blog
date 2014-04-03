<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));

	    // run post protect filter 
	    $this->beforeFilter('post.protect', array('only' => array('edit', 'update', 'destroy')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		//$posts = Post::paginate(4);
		// return View::make('posts.index')->with('posts', $posts);
		//show list of all posts

		$search = Input::get('search');
		$query = Post::orderBy('created_at', 'desc');
		if (is_null($search))
		{
			$posts = $query->paginate(3);
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(3);
		}

		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create-edit');
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
	        Session::flash('errorMessage', 'Post could not be created - see form errors');
   	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // Save to db - validation succeeded, create and save the post, redirect to index when done
	        Log::info(Input::all());
		    $post = new Post();
			$post->user_id = Auth::user()->id;
		    $post->title = Input::get('title');
		    $post->body = Input::get('body');
		    if (Input::hasFile('image'))
		    {
		    	$post->assignImage(Input::file('image'));
		    }
		    $post->save();
	    	Session::flash('successMessage', 'Post created successfully');
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

		$post = Post::find($id);
		return View::make('posts.create-edit')->with('post', $post);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	       	Session::flash('errorMessage', 'Post could not be created - see form errors');

   	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {    
		    $post->title = Input::get('title');
		    $post->body = Input::get('body');
		    $post->save();
		   	Session::flash('successMessage', 'Post updated successfully');
	    	// return Redirect::action(array('PostsController@show', $post->id));
	    	return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		// add the flash message here
		$post = Post::findOrFail($id);
		$post->delete();
		return "Delete request process successfull.";
	}

}