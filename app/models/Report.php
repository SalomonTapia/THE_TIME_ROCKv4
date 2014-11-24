<?php

class Report extends \Eloquent {
	protected $fillable = ['nom_reporte','desc_reporte','user_id'];
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Comentr');
	}
}