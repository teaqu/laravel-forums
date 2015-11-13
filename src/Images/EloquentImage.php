<?php namespace LaravelForums\Images;

use Eloquent;

class EloquentImage extends Eloquent {

	public $table = 'images';
	public $fillable = ['slug', 'title', 'model', 'path'];

}
