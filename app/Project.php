<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function institute() {
        return $this->belongsTo('App\Institute');
    }
    public function search($filter = null) {
        $results = $this
        ->where('name', 'LIKE', "%{$filter}%")
        ->paginate();
        return $results;
    }
}
