<?php

class Post extends \Eloquent {
	protected $fillable = ['title', 'body', 'user_id'];
	protected $table = 'posts';
}
