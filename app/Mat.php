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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
    
    /**
     * Get all of the mat's orders.
     */
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the mat.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }
}
