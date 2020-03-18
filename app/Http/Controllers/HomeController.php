<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\SubscriptionFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserActivationMail;

class HomeController extends Controller
{
    public function index()
    {
        // Mail::to('ahmad@belajar.test')->send(new UserActivationMail());

        return new UserActivationMail();
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
