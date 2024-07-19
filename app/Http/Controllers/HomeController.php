<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
        $comments = Comment::with('user')->where('post_id', $id)->get();

        return view('blogs/show', ['post' => $post, 'comments' => $comments]);
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required|exists:posts,id'
        ]);

        try {
            $comment = new Comment();
            $comment->comment = $request->comment;
            $comment->user_id = $request->user()->id;
            $comment->post_id = $request->post_id;
            $comment->save();

            return redirect()->back()->with('success', 'Commented Succesfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function blogs()
    {
        $post = Post::all();
        return view('blogs/index', ['posts' => $post]);
    }
}
