<?php

namespace SKE\Posts\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use SKE\Components\Http\Resources\ComponentResource;
use SKE\Users\Http\Resources\AuthorResource;

class PostResource extends JsonResource
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
            'id' =>$this->id,
            'slug' => $this->slug,
            'title' =>$this->title,
            'author' => new AuthorResource($this->whenLoaded('author')),
            'components' => ComponentResource::collection($this->whenLoaded('components')),
            'created_at' =>$this->created_at,
            'updated_at' => $this->updated_at,
            'links' =>[
                'self' => route('posts.show',$this->id),
            ],
        ];
    }
}
