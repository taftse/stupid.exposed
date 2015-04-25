<?php namespace SE;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('SE\Post');
    }

}
