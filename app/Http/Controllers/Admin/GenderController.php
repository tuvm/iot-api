<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;

class GenderController extends Controller
{
    public function list(Request $request)
    {
        return Gender::all()->toArray();
    }
}
