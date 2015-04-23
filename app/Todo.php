<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {
	protected $fillable = ['todo', 'description', 'status_id', 'user_id'];

	public function status()
	{
		return $this->belongsTo('App\Status');
	}

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

}
