<?php


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
        return $this->morphMany('SKE\Comments\Models\Comment', 'commentable');
    }
}