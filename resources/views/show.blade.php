@extends('layouts.app')

@section('content')
<!-- POST -->
<div class="mx-auto w-2/3">
    <div class="mt-5 border border-2 border-purple-300 rounded p-5 relative">
        <button class="float-right"><img class="h-3" src="/images/delete.png"></button>
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
</div>

<!-- COMMENTS -->
<div class="mx-auto w-2/3">
    <div class="mt-5 border border-2 border-purple-300 rounded p-5 relative">

    </div>
</div>
@endsection
