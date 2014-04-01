<?php

use Carbon/Carbon;

class Post extends BaseModel {
	protected $table = 'posts';

// define post relationship to user (author)
	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	* Validation rules
	*/
	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

}

