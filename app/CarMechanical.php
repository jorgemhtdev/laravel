<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarMechanical extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "car_mechanical";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_id', 'mechanical_id', 'hours', 'date'
    ];

}
