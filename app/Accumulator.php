<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accumulator extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['image','brands'];
     
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
    
    /**
     * Get all of the accumulator's orders.
     */
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the accumulator.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }

    /**
     * Get brand of the accumulator.
     */
    public function brand()
    {

        return $this->brands()->where('isCar',0);
    }

    /**
     * Get brand of the car that is accumulator for.
     */
    public function car()
    {

        return $this->brands()->where('isCar',1);
    }

}
