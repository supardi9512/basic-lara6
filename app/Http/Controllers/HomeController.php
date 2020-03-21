<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\SubscriptionFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserActivationMail;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::active()->ageGreaterThan(15)->get();

        dd($user);
    }

    public function show(User $user)
    {
        dd($user);
    }
}
