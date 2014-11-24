<?php

class Comentd extends \Eloquent {
	protected $fillable = ['coment','user_id','occation_id'];
	public function Occation()
	{
		return $this->belongsTo('Discographye');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}