<?php

class Occation extends \Eloquent {
	protected $fillable = ['nom_evento','lugar','desc_evento','user_id'];
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Coment');
	}
}