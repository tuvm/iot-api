<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use SoftDeletes;

    public function products() {
        return $this->hasMany('App\Product');
    }
}
