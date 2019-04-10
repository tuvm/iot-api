<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Badge;

class BadgeController extends Controller
{
    public function list(Request $request)
    {
        return Badge::all()->toArray();
    }
}
