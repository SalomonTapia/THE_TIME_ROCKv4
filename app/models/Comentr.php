<?php

class Comentr extends \Eloquent {
	protected $fillable = ['coment','user_id','report_id'];
	public function Report()
	{
		return $this->belongsTo('Report');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}