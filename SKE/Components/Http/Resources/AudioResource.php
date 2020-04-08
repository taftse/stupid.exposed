<?php

namespace SKE\Components\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;
use SKE\Files\Http\Resources\MediaFileResource;

class AudioResource extends JsonResource
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
            'type'=>'audio',
            'url'=>$this->when(!is_null($this->url),$this->url),
            'media'=>$this->when(!is_null($this->media),new MediaFileResource($this->media)),
            'provider'=>$this->when(!is_null($this->provider),$this->provider),
            'title'=>$this->when(!is_null($this->title),$this->title),
            'artist'=>$this->when(!is_null($this->artist),$this->artist),
            'album'=>$this->when(!is_null($this->album),$this->album),
            'poster'=>$this->when(!is_null($this->poster),new MediaFileResource($this->poster)),
            'embed_html'=>$this->when(!is_null($this->embed_html),$this->embed_html),
            'embed_url'=>$this->when(!is_null($this->embed_url),$this->embed_url),
            'metadata'=>$this->when(!is_null($this->metadata),$this->metadata),
        ];
    }
}
