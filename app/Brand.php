<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * Get all of the wheels that are assigned this brand.
     */
    public function wheels()
    {
        return $this->morphedByMany('App\Wheel', 'orderable');
    }

    /**
     * Get all of the tyres that are assigned this brand.
     */
    public function tyres()
    {
        return $this->morphedByMany('App\Tyre', 'orderable');
    }

    /**
     * Get all of the mats that are assigned this brand.
     */
    public function mats()
    {
        return $this->morphedByMany('App\Mat', 'orderable');
    }

    /**
     * Get all of the accumulators that are assigned this brand.
     */
    public function accumulators()
    {
        return $this->morphedByMany('App\Accumulator', 'orderable');
    }

}
