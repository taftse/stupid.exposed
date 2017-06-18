<?php

namespace SKE\Comments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = 'comments';
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['user'];

    protected $guarded = ['id','rating', 'parent_id', 'lft', 'rgt', 'depth'];




    /**
     * Determine if the comment has children.
     *
     * @return bool
     */
    public function hasChildren()
    {
        return (($this->rgt - $this->lft - 1) / 2) > 0;
    }
    /**
     * Get all of comment's children.
     *
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getChildren($columns = ['*'])
    {
        return $this->children()->get($columns);
    }
    /**
     * Get all of the owning commentable models.
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable()
    {
        return $this->morphTo();
    }
    /**
     * Get the user that creates the comment.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
