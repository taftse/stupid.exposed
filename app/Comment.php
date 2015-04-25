<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model {

    use SoftDeletes;

    protected $table = 'comments';

    protected $guarded = ['id','rating'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function  rateable()
    {
        return $this->morphMany('App\Rating','rateable');
    }

}