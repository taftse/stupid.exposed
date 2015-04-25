<?php namespace SE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany('SE\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('SE\Tag','post_tags','tag_id','post_id');
    }

    public function  rateable()
    {
        return $this->morphMany('SE\Rating','rateable');
    }

    protected function category()
    {
        return $this->belongsTo('SE\Category');
    }
}
