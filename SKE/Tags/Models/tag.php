<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 18:02
 */

namespace SKE\Tags\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use SKE\Posts\Models\Post;

class Tag extends Model {

    use SoftDeletes;

    protected $table = 'tags';

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tags','post_id','tag_id');

    }
}