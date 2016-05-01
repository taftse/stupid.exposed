<?php

namespace SKE\Comments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Baum\Node;
use SE\User;


class Comment extends Node {

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

    public function  rateable()
    {
        return $this->morphMany('SE\Rating','rateable');
    }

    //////////////////////////////////////////////////////////////////////////////

    //
    // Below come the default values for Baum's own Nested Set implementation
    // column names.
    //
    // You may uncomment and modify the following fields at your own will, provided
    // they match *exactly* those provided in the migration.
    //
    // If you don't plan on modifying any of these you can safely remove them.
    //


    //
    // This is to support "scoping" which may allow to have multiple nested
    // set trees in the same database table.
    //
    // You should provide here the column names which should restrict Nested
    // Set queries. f.ex: company_id, etc.
    //



    //////////////////////////////////////////////////////////////////////////////

    //
    // Baum makes available two model events to application developers:
    //
    // 1. `moving`: fired *before* the a node movement operation is performed.
    //
    // 2. `moved`: fired *after* a node movement operation has been performed.
    //
    // In the same way as Eloquent's model events, returning false from the
    // `moving` event handler will halt the operation.
    //
    // Please refer the Laravel documentation for further instructions on how
    // to hook your own callbacks/observers into this events:
    // http://laravel.com/docs/5.0/eloquent#model-events

}