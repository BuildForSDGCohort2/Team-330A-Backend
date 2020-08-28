<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = ['name','description'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function image()
    {
        return $this->morphOne('App\Images', 'imageable');
    }
}
