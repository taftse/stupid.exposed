<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 18:03
 */

namespace SKE\Categories\Models;

use Illuminate\Database\Eloquent\Model;
use SKE\Posts\Models\Post;

class Category extends Model {

    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}