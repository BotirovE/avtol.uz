<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * Get all of the wheels that are assigned this brand.
     */
    public function wheels()
    {
        return $this->morphedByMany('App\Wheel', 'brandable');
    }

    /**
     * Get all of the tyres that are assigned this brand.
     */
    public function tyres()
    {
        return $this->morphedByMany('App\Tyre', 'brandable');
    }

    /**
     * Get all of the mats that are assigned this brand.
     */
    public function mats()
    {
        return $this->morphedByMany('App\Mat', 'brandable');
    }

    /**
     * Get all of the accumulators that are assigned this brand.
     */
    public function accums()
    {
        return $this->morphedByMany('App\Accumulator', 'brandable');
    }

}
