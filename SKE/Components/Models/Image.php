<?php

namespace  SKE\Components\Models;

use Illuminate\Database\Eloquent\Model;
use SKE\Files\Models\MediaFile;


class Image extends Model
{
    protected $with = ['versions'];

    public function components()
    {
        return $this->morphMany(Component::class,'postable');
    }

    public function versions()
    {
        return $this->morphMany(MediaFile::class,'fileable');
    }
}
