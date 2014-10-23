<?php

class Post extends \Eloquent {
	protected $fillable = ['title', 'content', 'status', 'user_id'];

    public function user() {
        return $this->belongsTo('User');
    }
}