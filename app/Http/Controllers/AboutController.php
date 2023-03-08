<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $page_title = 'About';

        return view('about', ['page_title' => $page_title]);
    }
}
