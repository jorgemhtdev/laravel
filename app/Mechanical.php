<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanical extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "mechanical";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'salary'
    ];

    public function car()
    {
        return $this->belongsToMany('App\Car', 'car_mechanical', 'car_id', 'mechanical_id');
    }
}
