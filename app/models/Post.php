<?php

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

	/**
	* Helper to assign images to posts and handle upload
	*/
	public function assignImage($inputFile)
	{
		
		    $imagePath = base_path() . '/public/images/';
		    $extension = $inputFile->getClientOriginalExtension();
		    $imageName = uniqid() . '.' . $extension;
		    $fullPathToImage = $imagePath . $imageName;
		    $inputFile->move($imagePath, $fullPathToImage);
		    $this->attribute['image'] = '/images/' . $imageName;
	}

	public function delete_img()
	{
		//File::delete()
		// 
	}

}

