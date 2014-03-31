<?php

use Carbon\Carbon;

class Post extends Eloquent {
	protected $table = 'users';

	/**
	* Validation rules
	*/


	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}


	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::updateFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

	

}

