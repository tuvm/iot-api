<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;

class ProductController extends Controller
{
    public function getByGender($id)
    {
        $gender = Gender::find($id);
        return $gender->products()->get()->toArray();
    }
}
