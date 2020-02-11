<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('User')->orderBy('created_at', 'DESC')->get();

        return view('feed', compact('posts'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'body' => 'required',
        ]);

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->body = $request->body;
        $post->save();
        return redirect('/feed');
    }
}
