<?php

namespace SKE\Users\Models;

use Illuminate\Database\Eloquent\Model;

class OauthAccount extends Model
{
    protected $with = ['userAccount'];

    public function userAccount()
    {
        return $this->belongsTo(User::class);
    }

    public static function findBySocialId(string $provider, string $socialId)
    {
        return static::where('provider',$provider)->where('social_id',$socialId)->firstOrFail();
    }
}
