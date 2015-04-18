<?php namespace ccservice\entities;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	//
	protected $fillable = array('id', 'client', 'address', 'servicetype', 'desc', 'date', 'contractor', 'servicestate');
}
