<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $recentPosts = Post::latest()->limit(4)->get();
        // dd($recentPosts->toArray());
        return view('welcome', ['recentPosts' => $recentPosts]);
    }

    public function viewBlog($id)
    {
        $post = Post::with(['user', 'category'])->where('id', $id)->first();

        return view('blogs/index', compact('post'));
    }
    public function blogs()
    {
        return view('blog');
    }
}
