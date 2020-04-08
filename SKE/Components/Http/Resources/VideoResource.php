<?php

namespace SKE\Components\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'type'=>'video',
            'provider'=>$this->provider,
            'url'=> $this->when(!is_null($this->url),$this->url),
            'embed_html'=> $this->when(!is_null($this->embed_html),$this->embed_html),
            'embed_url'=> $this->when(!is_null($this->embed_url),$this->embed_url),
            'metadata'=>$this->when(!is_null($this->metadata),$this->metadata),
        ];
    }
}
