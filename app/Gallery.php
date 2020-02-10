<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function news() {
        return $this->belongsTo('App\News');
    }
}
