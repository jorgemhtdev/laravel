<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "cars";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['car_brand','price','number_plate','color','clients_id'];

    public function client()
    {
        return $this->hasMany('App\Client', 'clients_id', 'id' );
    }

    public function mechanical()
    {
        return $this->belongsToMany('App\Mechanical');
    }
}
