<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();

        return view('post.create', compact('users'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request['title'],
            'text' => $request['text'],
            'user_id' => $request['user_id'],
        ]);

        return redirect()->route('post.index');
    }

    public function createFromUser()
    {
        return view('post.createFromUser');
    }

    public function storeFromUser(Request $request)
    {
        Post::create([
            'title' => $request['title'],
            'text' => $request['text'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('post.index');
    }
}
