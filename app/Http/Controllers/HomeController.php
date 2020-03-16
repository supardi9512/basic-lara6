<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\SubscriptionFormRequest;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => [
                ['id' => 1, 'title' => 'ABC'],
                ['id' => 2, 'title' => 'DEF'],
                ['id' => 3, 'title' => 'GHI'],
            ]
        ];

        return response()->json($data, 201);
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
