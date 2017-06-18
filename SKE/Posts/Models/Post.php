<?php namespace SKE\Posts\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use SKE\Categories\Models\Category;
use SKE\Comments\Traits\Commentable;
use SKE\Rateable\Traits\Rateable;
use SKE\Tags\Models\Tag;


class Post extends Model {

    use SoftDeletes;
    use Commentable;
    use Rateable;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $this->attributes['slug'] = Str::slug($value,'-');
    }
}