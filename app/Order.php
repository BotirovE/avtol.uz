<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get user who made this order.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all of the wheels that are assigned this order.
     */
    public function wheels()
    {
        return $this->morphedByMany('App\Wheel', 'orderable');
    }

    /**
     * Get all of the tyres that are assigned this order.
     */
    public function tyres()
    {
        return $this->morphedByMany('App\Tyre', 'orderable');
    }

    /**
     * Get all of the mats that are assigned this order.
     */
    public function mats()
    {
        return $this->morphedByMany('App\Mat', 'orderable');
    }

    /**
     * Get all of the accumulators that are assigned this order.
     */
    public function accums()
    {
        return $this->morphedByMany('App\Accumulator', 'orderable');
    }

}
