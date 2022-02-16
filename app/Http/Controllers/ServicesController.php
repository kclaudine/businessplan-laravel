<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function ourservices()
    {
        return view('user.services');
    }
}
