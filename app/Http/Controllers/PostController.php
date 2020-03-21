<?php
// php artisan make:controller PostController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // $posts = Post::latest()->paginate(10);
        // $posts = Post::latest()->paginate($request->get('per-page', 10));
        $posts = Post::orderBy('title', $request->get('order', 'asc'))
            ->paginate($request->get('per-page', 10));


        return view('post.index', [
            'posts' => $posts,
        ]);
    }
}
