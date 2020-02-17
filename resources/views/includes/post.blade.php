<div class="mt-5 border border-2 border-purple-300 rounded p-5 relative">
    @if(auth()->user()->id === $post->user_id)
        <form method="POST" action="{{ $post->path() }}" class="text-right">
            @method('DELETE')
            @csrf
            <button class="float-right" type="submit"><img class="h-3" src="/images/delete.png"></button>
        </form>
    @endif
    <div class="mb-2 pb-3 border-b border-b-2 border-purple-200 flex items-center">
        <h6 class="text-lg text-purple-600 mr-2">NICKNAME </h6>
        <a href="" class="text-xs text-purple-400">{{ '@'.$post->user->name }}</a>
    </div>
    <a href="{{ $post->path() }}" class="block mb-3 border-b border-b-2 border-purple-200 pb-5">{{ $post->body }}</a>
    <div class="flex">
        <a class="like mr-4">
            <img class="h-5 mr-2 inline" src="/images/like.png"><span>0</span>
        </a>
        <!-- <a>
            <img class="h-5" src="/images/liked.png">
        </a> -->
        <a>
            <img class="h-5 mr-2 inline" src="/images/comment.png"><span>{{ $post->commentsCount() }}</span>
        </a>
    </div>
    <span class="text-xs block text-left text-purple-300 text-right">{{ $post->created_at->diffForHumans() }}</span>
</div>
