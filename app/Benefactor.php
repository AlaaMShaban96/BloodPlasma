<?php

namespace App;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Benefactor extends Model
{
    use Filterable;
    protected $fillable = [
        'name','number','blood_id','city_id','remember_token'
    ];
    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
