<?php

namespace SKE\Files\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class MediaFileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => $this->type,
            'url' => 'https://'.Storage::disk('s3')->url($this->url),//"https://".env('AWS_URL').$this->url,
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
