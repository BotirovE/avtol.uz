<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Wheel extends Model
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
    protected $hidden = ['created_at', 'updated_at', 'pivot', 'brands'];
    
    /**
     * Get all of the wheel's orders.
     */
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the wheel.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }

    /**
     * Get the brand of the wheel.
     *
     * @return string
     */
    public function getBrandAttribute()
    {
        return $this->brands->where('isCar',0)->first()->name;
    }

    /**
     * Get the image_path of the accumulator.
     *
     * @return string
     */
    public function getImageAttribute()
    {
        return Storage::exists('public/images/wheels/' . $this->id) ? asset('storage/images/wheels/' . $this->id) : asset('storage/images/wheels/default.jpg');
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['brand', 'image'];
}
