<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
    protected $hidden = ['created_at', 'updated_at', 'pivot','brands'];
    
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
     * Get the brand of the accumulator.
     *
     * @return string
     */
    public function getBrandAttribute()
    {
        return $this->brands->where('isCar',0)->first()->name;
    }

    /**
     * Get the brand of cars that is the accumulator for.
     *
     * @return array
     */
    public function getCarAttribute()
    {
        return $this->brands->where('isCar',1)->pluck('name');
    }

    /**
     * Get the size of the accumulator.
     *
     * @return string
     */
    public function getSizeAttribute()
    {
        return "{$this->height}x{$this->width}x{$this->length}";
    }

    /**
     * Get the image_path of the accumulator.
     *
     * @return string
     */
    public function getImageAttribute()
    {
        return Storage::exists('public/images/accums/' . $this->id) ? asset('storage/images/accums/' . $this->id) : asset('storage/images/accums/default.jpg');
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['brand', 'car', 'size', 'image'];
}
