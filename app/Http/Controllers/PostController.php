<?php
// php artisan make:controller PostController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::take(10)->get();

        return view('post.index', [
            'posts' => $posts,
        ]);
    }
}
