<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mat extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['image','brands'];
    
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
