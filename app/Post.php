<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

    public function  rateable()
    {
        return $this->morphMany('App\Rating','rateable');
    }
}
