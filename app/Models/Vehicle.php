<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";
    protected $primaryKey= "id_vehicle";
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'id_vehicle';
    }
}
