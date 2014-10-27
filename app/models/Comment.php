<?php

class Comment extends \Eloquent {
	protected $fillable = ['comment', 'user_id'];
	protected $table = 'comments';
}
