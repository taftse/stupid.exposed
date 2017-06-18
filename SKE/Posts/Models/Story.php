<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 17:12
 */

namespace SKE\Posts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model {

    use SoftDeletes;

    protected $table = 'stories';

    protected $guarded = ['id'];


    public function components()
    {
        return $this->morphMany(Component::class,'postable');
    }

}