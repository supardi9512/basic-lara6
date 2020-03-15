<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        echo $request->name;
        // echo $request->get('name', 'kosong');
        // echo request('name');
    }
}
