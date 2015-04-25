<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Rating extends Model {
    use SoftDeletes;

    protected $table = 'ratings';

    protected $guarded = ['id'];

    public function  rateable()
    {
        return $this->morphTo();
    }
} 