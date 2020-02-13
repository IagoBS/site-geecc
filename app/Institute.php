<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function project() {
        return $this->hasMany('App\Project');
    }
}
