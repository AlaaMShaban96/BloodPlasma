<?php

namespace App\Http\Resources\Benefactor;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BenefactorResourceCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\Benefactor\BenefactorResource';

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
