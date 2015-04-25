<?php


namespace SE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model {

    use SoftDeletes;

    protected $table = 'tags';

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany('SE\Post','post_tags','post_id','tag_id');

    }
}