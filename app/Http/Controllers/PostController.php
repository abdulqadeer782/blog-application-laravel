<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            $posts = Post::with(['user', 'category'])->get();
        } else {
            $posts = Post::with(['user', 'category'])->where('user_id', Auth::user()->id)->get();
        }

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'category_id' => 'required|exists:categories,id',
                'cover_image' => 'required'
            ]);

            $post = new Post();
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->content = $request->content;
            $post->user_id = $request->user()->id;

            if ($request->hasFile('cover_image')) {
                $imagePath = $request->file('cover_image')->store('public/');
                $post->cover_image = basename($imagePath);
            }

            $post->save();

            return redirect()->route('posts.index')
                ->with('success', 'Post created successfully');
        } catch (\Throwable $th) {
            // Log the exception for debugging purposes
            \Log::error('Error storing post: ' . $th->getMessage());

            return redirect()->route('posts.index')
                ->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post, 'categories' => Category::all()]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        try {
            $post->title = $request->title;
            $post->content = $request->content;
            $post->category_id = $request->category_id;

            if ($request->hasFile('cover_image')) {
                if (Storage::exists('public/' . $request->cover_image)) {
                    dd($request->cover_image);

                }

                $imagePath = $request->file('cover_image')->store('public/');
                $post->cover_image = basename($imagePath);
            }

            $post->save();

            return redirect()->route('posts.index')
                ->with('success', 'Post updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('posts.index')
                ->with('message', 'Something went wrong!');
        }
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
