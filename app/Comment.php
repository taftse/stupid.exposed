<?php

namespace SE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model {

    use SoftDeletes;

    protected $table = 'comments';

    protected $guarded = ['id','rating'];

    public function post()
    {
        return $this->belongsTo('SE\Post');
    }

    public function  rateable()
    {
        return $this->morphMany('SE\Rating','rateable');
    }

}