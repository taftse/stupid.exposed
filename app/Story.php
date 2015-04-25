<?php namespace SE;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model {

    use SoftDeletes;

    protected $table = 'stories';

    protected $guarded = ['id'];


    public function components()
    {
        return $this->morphMany('SM\Component','postable');
    }

} 