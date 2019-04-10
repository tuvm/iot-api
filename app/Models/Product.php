<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    public function gender() {
        return $this->belongsTo('App\Models\Gender');
    }

    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }

    public function badge() {
        return $this->belongsTo('App\Models\Badge');
    }

    public function images() {
        return $this->hasMany('App\Models\ProductImage');
    }
}
