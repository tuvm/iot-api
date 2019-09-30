<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data;

class DataController extends Controller
{
    public function getdata()
    {
        $data = Data::all();
        return $data;
    }
}
