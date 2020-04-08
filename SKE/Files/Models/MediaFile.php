<?php

namespace SKE\Files\Models;

use Illuminate\Database\Eloquent\Model;

class MediaFile extends Model
{
    protected $fillable = ['url','type','width','height'];

    public function fileable()
    {
        return $this->morphTo();
    }
}
