<?php namespace SE;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model {

    use SoftDeletes;

    protected $table = 'components';

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo('SE\Post');
    }

    public function postable()
    {
        return $this->morphTo();
    }
}

