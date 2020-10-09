<?php

namespace App\Http\Resources\Benefactor;

use App\Http\Resources\Benefactor\BenefactorResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllBenefactorResourceCollection extends ResourceCollection
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
