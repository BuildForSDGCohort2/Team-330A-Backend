<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $guarded = [];
    public function imageable()
    {
        return $this->morphTo();
    }
}
