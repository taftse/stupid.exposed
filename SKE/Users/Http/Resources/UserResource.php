<?php

namespace SKE\Users\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'created_at' =>$this->created_at,
            'updated_at' => $this->updated_at,
            'link' =>[
                'self' => route('user.show',$this->id),
            ],
        ];
    }
}
