<?php

namespace App\Http\Resources\Blood;

use Illuminate\Http\Resources\Json\JsonResource;

class BloodResource extends JsonResource
{
    public static $wrap = '';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id'=>$this->id,
            'name'=>$this->name,
        ];
    }
}
