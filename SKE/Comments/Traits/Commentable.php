<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 15:17
 */

namespace SKE\Comments\Traits;

use SKE\Comments\Models\Comment;

trait Commentable
{
    /**
     * Get all of the model's comments.
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}