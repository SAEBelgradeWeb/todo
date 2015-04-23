<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

	public $timestamps = false;
	protected $fillable = ['name'];

	public function todos() 
	{
		return $this->hasMany('App\Todo');
	}

}
