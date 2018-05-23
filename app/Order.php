<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all of the owning orderable models.
     */
    public function orderable()
    {
        return $this->morphTo();
    }

}
