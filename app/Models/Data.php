<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use SoftDeletes;

    protected $table = 'datas';
}
