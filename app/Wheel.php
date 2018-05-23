<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    /**
     * Get all of the wheel's orders.
     */
    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the wheel.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }
}
