<?php

class Comentd extends \Eloquent {
	protected $fillable = ['coment','user_id','discography_id'];
	public function Discographye()
	{
		return $this->belongsTo('Discographye');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}