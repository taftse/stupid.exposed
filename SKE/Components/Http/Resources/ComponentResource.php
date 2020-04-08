<?php

namespace SKE\Components\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use SKE\Components\Models\Audio;
use SKE\Components\Models\Image;
use SKE\Components\Models\Text;
use SKE\Components\Models\Video;

class ComponentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        switch($this->postable_type){
            case Image::class:
                return new ImageResource($this->postable);
                break;
            case Text::class:
                return new TextResource($this->postable);
                break;
            case Video::class:
                return new VideoResource($this->postable);
                break;
            case Audio::class:
                return new AudioResource($this->postable);
                break;
            default:
                return parent::toArray($request);
                break;
        }
    }
}
