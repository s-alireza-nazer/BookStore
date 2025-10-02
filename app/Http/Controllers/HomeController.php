<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
