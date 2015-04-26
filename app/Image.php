<?php namespace SE;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model {

    use SoftDeletes;

    protected $table = 'imagess';

    protected $guarded = ['id'];


    public function components()
    {
        return $this->morphMany('SE\Component','postable');
    }

} 