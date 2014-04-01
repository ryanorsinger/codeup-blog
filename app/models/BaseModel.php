<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {
	// protected $table = 'users';

	/**
	* Validation rules
	*/

	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone(Config::get('app.localTimezone'));
	}


	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone(Config::get('app.localTimezone'));
	}

	

}

