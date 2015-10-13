<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent {

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
	
	/**
     * The author of post.
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
	
	/**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany('Category');
    }
	
	/**
     * The comments that belong to the post.
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }
	
}