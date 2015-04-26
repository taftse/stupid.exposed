<?php namespace SE;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model {

    use SoftDeletes;

    protected $table = 'videos';

    protected $guarded = ['id'];


    public function components()
    {
        return $this->morphMany('SE\Component','postable');
    }

} 