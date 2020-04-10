<?php


namespace SKE\Users\Auth\Social;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;

abstract class SocialAccount implements Arrayable
{
    /**
     * @var array
     */
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    protected function get($name)
    {
        return Arr::get($this->attributes, $name);
    }
}
