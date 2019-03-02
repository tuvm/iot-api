<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Gender extends Model
{
    use SoftDeletes;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
