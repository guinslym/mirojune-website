<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function medias()
    {
        return $this->hasMany('App\Media');
    }
}