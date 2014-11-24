<?php

class Comentr extends \Eloquent {
	protected $fillable = ['coment','user_id','occation_id'];
	public function Occation()
	{
		return $this->belongsTo('Occation');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}