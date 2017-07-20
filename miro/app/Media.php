<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}