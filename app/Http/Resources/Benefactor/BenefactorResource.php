<?php

namespace App\Http\Resources\Benefactor;

use App\Http\Resources\City\CityResource;
use App\Http\Resources\Blood\BloodResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BenefactorResource extends JsonResource
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
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'number'=>$this->number,
            'token'=>$this->remember_token,
            'boold'=>new BloodResource($this->blood),
            'city'=> new CityResource($this->city),
        ];
    }
}
