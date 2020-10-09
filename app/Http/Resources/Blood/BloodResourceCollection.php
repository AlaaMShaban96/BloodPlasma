<?php

namespace App\Http\Resources\Blood;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BloodResourceCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\Blood\BloodResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
