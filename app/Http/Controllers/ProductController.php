<?php

namespace App\Http\Controllers;
use App\Models\Gender;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getByGender($id)
    {
        $gender = Gender::find($id);
        return $gender->products()->get()->toArray();
    }
}
