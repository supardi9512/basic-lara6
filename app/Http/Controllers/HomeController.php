<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($username)
    {
        // return view('user.index')->with('username', $username);

        // return view('user.index')->withUsername($username);

        // return view('user.index')->with([
        //     'username' => $username,
        //     'fullname' => 'Supardi'
        // ]);

        // return view('user.index', compact('username'));

        // LEBIH DISARANKAN
        return view('user.index', [
            'username' => $username,
            'fullname' => 'Supardi'
        ]);
    }

}
