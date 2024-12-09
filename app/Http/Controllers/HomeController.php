<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home Page';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}