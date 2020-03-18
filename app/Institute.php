<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function project() {
        return $this->hasMany('App\Project');
    }
    public function news() {
        return $this->hasMany('App\News');
    }
    public function search($filter = null) {

        $results = $this
            ->where('name', 'LIKE', "%{$filter}%")
            ->paginate();
        return $results;
    }
}
