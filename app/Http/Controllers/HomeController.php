<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function userHomepage()
    {
        return view('homepage', ['locations' => Location::availabeLocation()]);
    }
}
