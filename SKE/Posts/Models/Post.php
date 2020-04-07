<?php

namespace SKE\Posts\Models;

use Illuminate\Database\Eloquent\Model;
use SKE\Components\Models\Component;
use SKE\Users\Models\User;

class Post extends Model
{

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
