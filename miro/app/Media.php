<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public $table = "medias";
    //protected $fillable = ['video_ogg', 'about_me', 'video_mp4', 'aboutmepicture'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}