<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mat extends Model
{
    /**
     * Get all of the mat's orders.
     */
    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the mat.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }
}
