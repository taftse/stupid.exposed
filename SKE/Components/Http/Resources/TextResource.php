<?php

namespace SKE\Components\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TextResource extends JsonResource
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
            'type'=>'text',
            'subtype'=>$this->when(!is_null($this->subtype),$this->subtype),
            'text'=> $this->text,
            'formatting'=>$this->when(!is_null($this->formatting),$this->formatting),
        ];
    }
}
