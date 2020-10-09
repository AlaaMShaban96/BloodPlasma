<?php

namespace App\Http\Resources\City;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CityResourceCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\City\CityResource';

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
