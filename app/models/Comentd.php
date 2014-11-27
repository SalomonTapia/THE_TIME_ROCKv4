<?php

class Comentd extends \Eloquent {
<<<<<<< HEAD
	protected $fillable = ['coment','user_id','occation_id'];
	public function Occation()
	{
		return $this->belongsTo('Discographye');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
=======
	protected $fillable = [];
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
}