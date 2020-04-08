<?php

namespace SKE\Components\Models;

use Illuminate\Database\Eloquent\Model;
use SKE\Posts\Models\Post;

class Component extends Model
{
    protected $with = ['postable'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function postable()
    {
        return $this->morphTo();
    }
}
