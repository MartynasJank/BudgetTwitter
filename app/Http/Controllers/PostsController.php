<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('User')->orderBy('created_at', 'DESC')->take(10)->get();

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

    public function show(Post $post){
        return view('show', compact('post'));
    }

    public function destroy(Post $post){
        if(auth()->user()->id === $post->user_id){
            $project->delete();
        }
        return redirect('/feed');
    }
}
