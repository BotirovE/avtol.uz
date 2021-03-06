<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Tyre extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['image', 'brands'];
         
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'pivot','brands'];
    
    /**
     * Get all of the tyre's orders.
     */
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }

    /**
     * Get all of the brands for the tyre.
     */
    public function brands()
    {
        return $this->morphToMany('App\Brand', 'brandable');
    }

    /**
     * Get the brand of the tyre.
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
        return Storage::exists('public/images/tyres/' . $this->id) ? asset('storage/images/tyres/' . $this->id) : asset('storage/images/tyres/default.jpg');
    }

    /**
     * Get the type of product.
     *
     * @return string
     */
    public function getTypeAttribute()
    {
        return "tyre";
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['brand', 'image', 'type'];
}
