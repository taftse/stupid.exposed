<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model {

    use SoftDeletes;

    protected $table = 'tags';

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}