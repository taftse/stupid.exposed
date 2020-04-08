<?php

namespace SKE\Components\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;
use SKE\Files\Http\Resources\MediaFileResource;


class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'type' =>'image',
            // 'id' =>$this->id,
            'media' => MediaFileResource::collection($this->versions),
        ];

    }
}
