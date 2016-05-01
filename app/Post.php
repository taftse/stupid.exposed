<?php namespace SE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use SKE\Comments\Traits\Commentable;

class Post extends Model {

    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function components()
    {
        return $this->hasMany('SE\Component');
    }

    public function comments()
    {
        return $this->morphMany('SKE\Comments\Models\Comment', 'commentable')->orderBy('lft');
    }

    public function tags()
    {
        return $this->belongsToMany('SE\Tag')->withTimestamps();
    }

    public function  rateable()
    {
        return $this->morphMany('SE\Rating','rateable');
    }

    public function category()
    {
        return $this->belongsTo('SE\Category');
    }

    public function user()
    {
        return $this->belongsTo('SE\User');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $this->attributes['slug'] = Str::slug($value,'-');
    }
}
