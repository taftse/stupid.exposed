<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 17:11
 */

namespace SKE\Posts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model {

    use SoftDeletes;

    protected $table = 'components';

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function postable()
    {
        return $this->morphTo();
    }
}
