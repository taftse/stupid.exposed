<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 17:13
 */

namespace SKE\Posts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model {

    use SoftDeletes;

    protected $table = 'videos';

    protected $guarded = ['id'];


    public function components()
    {
        return $this->morphMany(Component::class,'postable');
    }

}