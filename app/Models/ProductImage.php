<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use SoftDeletes;

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
