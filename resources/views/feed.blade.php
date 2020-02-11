@extends('layouts.app')

@section('content')
<div class="mx-auto w-1/3">
    <form method="POST" action="/feed" class="w-full">
        @csrf
        <div class="flex items-start border-b border-b-2 border-purple-300 py-2">
            <textarea id="body" name="body" class="resize-none border-none rounded w-full focus:outline-none mr-3 py-1 px-2" placeholder="What's happening?"></textarea>
            <button class="flex-shrink-0 bg-purple-200 hover:bg-purple-400 border-purple-300 hover:border-purple-500 text-sm border-2 text-purple-600 py-1 px-2 rounded" type="submit">Twoot</button>
        </div>
    </form>
    @foreach($posts as $post)
    <div class="mt-5 border border-2 border-purple-300 rounded p-5 relative">
        <button class="float-right"><img class="h-3" src="images/delete.png"></button>
        <div class="mb-2 pb-3 border-b border-b-2 border-purple-200 flex items-center">
            <h6 class="text-lg text-purple-600 mr-2">NICKNAME </h6>
            <a href="" class="text-xs text-purple-400">{{ '@'.$post->user->name }}</a>
        </div>
        <p class="mb-3 border-b border-b-2 border-purple-200 pb-5">{{ $post->body }}</p>
        <div class="flex">
            <button>
                <img class="h-5 mr-2" src="/images/like.png">
            </button>
            <!-- <button>
                <img class="h-5" src="/images/liked.png">
            </button> -->
            <button>
                <img class="h-5" src="/images/comment.png">
            </button>
        </div>
        <span class="text-xs block text-left text-purple-300 text-right">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    @endforeach
</div>
@endsection
