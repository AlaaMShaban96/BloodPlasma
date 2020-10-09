<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class BenefactorFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function city($city_id)
    {
       if ($city_id) {
          $this->whereHas('city', function($query) use($city_id) {
            $query->where('id', $city_id);
          });
        }
    }
    public function blood($blood_id)
    { 
       if ($blood_id) {
       
        $this->whereHas('blood', function($query) use($blood_id) {
          $query->where('id', $blood_id);
        });
        }
    }
    public function token($remember_token)
    {
       if ($remember_token) {
           
          $this->where('remember_token',$remember_token);
        }
    }
    
}
