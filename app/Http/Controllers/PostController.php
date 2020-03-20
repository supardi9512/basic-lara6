<?php
// php artisan make:controller PostController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // MENAMPILKAN DATA

        // $posts = Post::take(10)->get();

        // return view('post.index', [
        //     'posts' => $posts,
        // ]);

        // MENAMBAH DATA (METHOD CREATE)
        // Post::create([
        //     'title' => 'Judul 1',
        //     'content' => 'Konten 1'
        // ]);

        // MENAMBAH / MENGUBAH DATA (METHOD SAVE)
        // TANPA FILLABLE DI MODEL
        // $post = new Post;
        // $post->title = 'Title 2';
        // $post->content = 'Konten 2';
        // $post->save();

        // MENGUBAH DATA
        
        // $post = Post::findOrFail($request->id);

        // $post->update([
        //     'title' => 'Post satu',
        //     'content' => 'Konten satu'
        // ]);

        // MENGHAPUS DATA
        $post = Post::findOrFail($request->id);

        $post->delete();
    }
}
