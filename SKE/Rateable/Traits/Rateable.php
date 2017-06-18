<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 01/05/2016
 * Time: 18:41
 */

namespace SKE\Rateable\Traits;


use SKE\Rateable\Models\Rating;

trait Rateable
{
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }

    public function sumRating()
    {
        return $this->ratings()->sum('rating');
    }

    public function ratingPercent($max = 5)
    {
        $quantity = $this->ratings()->count();
        $total = $this->sumRating();

        return ($quantity * $max) > 0 ? $total / (($quantity * $max) / 100) : 0;
    }

    public function getAverageRatingAttribute()
    {
        return $this->averageRating();
    }
    public function getSumRatingAttribute()
    {
        return $this->sumRating();
    }
}