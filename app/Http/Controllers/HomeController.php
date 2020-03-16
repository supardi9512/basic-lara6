<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\SubscriptionFormRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(SubscriptionFormRequest $request)
    {
        dd('Berhasil Langganan');
    }

}
