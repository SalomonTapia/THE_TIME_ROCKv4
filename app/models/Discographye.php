<?php

class Discographye extends \Eloquent {
	protected $fillable = ['nombre','banda','genero','url','descripcion','imagen','user_id'];
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Comentd');
	}
}