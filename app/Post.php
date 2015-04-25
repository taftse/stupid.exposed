<?php namespace SE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function components()
    {
        return $this->hasMany('SE\Component')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('SE\Comment')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('SE\Tag')->withTimestamps();
    }

    public function  rateable()
    {
        return $this->morphMany('SE\Rating','rateable')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo('SE\Category')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('SE\User')->withTimestamps();
    }

}
