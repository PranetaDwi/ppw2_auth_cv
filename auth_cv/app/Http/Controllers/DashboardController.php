<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('cv.home')
    }

    public function about(){
        return view ('cv.about')
    }

    public function portfolio(){
        return view ('cv.portfolio')
    }

}
