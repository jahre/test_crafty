<?php

class Item extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';
    public static $timestamps = true;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
