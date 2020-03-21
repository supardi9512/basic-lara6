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
        $user = User::where('username', 'supardi')->first();

        return $user->getFirstNameOrUsername();

        // bisa juga langsung mengakses propertynya seperti ini jika kasusnya simpel, 
        // tanpa menggunakan eloquent model
        // return $user->username;
    }
}
