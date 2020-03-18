<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class News extends Model
{

    use HasSlug;
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function gallery()
    {
        return $this->hasMany('App\Gallery');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function institute()
    {
        return $this->belongsTo('App\Institute');
    }
    public function search($filter = null)
    {
        $results = $this
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->where('title', 'LIKE', "%{$filter}%");
                    $query->where('content', 'LIKE', "%{$filter}%");
                }
            })
            ->paginate();
        return $results;
    }
}
