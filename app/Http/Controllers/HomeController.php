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

    public function other()
    {
        return 'Other Route';
    }

    public function store(SubscriptionFormRequest $request)
    {
        return redirect()->route('other');
        // return redirect()->back();
        // return back();
    }

}
