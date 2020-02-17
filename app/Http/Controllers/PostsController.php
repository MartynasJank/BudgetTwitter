<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('User')->where('post_id', null)->orderBy('created_at', 'DESC')->take(10)->get();
        foreach($posts as $post){
            $comments[$post->id] = Post::where('post_id', $post->id)->count();
        }
        return view('feed', compact('posts', 'comments'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'body' => 'required',
        ]);

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->body = $request->body;
        $post->post_id = $request->post_id;
        var_dump($post);
        $post->save();
        if($request->post_id === null){
            return redirect('/feed');
        } else {
            return redirect('/feed/'.$request->post_id);
        }
    }

    public function show(Post $post){
        $comments = $post->with('User')->where('post_id', $post->id)->orderBy('created_at', 'DESC')->get();
        return view('show', compact('post', 'comments'));
    }

    public function destroy(Post $post){
        if(auth()->user()->id === $post->user_id){
            $comments = $post->where('post_id', $post->id)->delete();
            $post->delete();
        }
        if($post->post_id === null){
            return redirect('/feed');
        } else {
            return redirect(url()->previous());
        }
    }
}
