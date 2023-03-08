<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaucetController extends Controller
{
    public function index()
    {
        $page_title = 'Faucet';

        return view('faucet', ['page_title' => $page_title]);
    }
}
