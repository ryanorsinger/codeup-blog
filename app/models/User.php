<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	* Login Validation rules for User
	*/
	public static $rules = array(
	    'email'      => 'required|max:100',
	    'password'       => 'required|max:100'
	);


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');


	/**
	* Relationship for one to many posts
	**/
	public function posts()
	{
		return $this->hasMany('Post');
	}


	/**
	* Relationship for one to many comments
	**/
	// public function comments()
	// {
	// 	return $this->hasMany('Comment');
	// }

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

}