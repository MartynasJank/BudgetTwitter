@csrf
<div class="flex items-start border-b border-b-2 border-purple-300 py-2">
    <input type="hidden" name="post_id" value="{{$post->id ?? null }}">
    <textarea id="body" name="body" class="resize-none border-none rounded w-full focus:outline-none mr-3 py-1 px-2" placeholder="Comment"></textarea>
    <button class="flex-shrink-0 bg-purple-200 hover:bg-purple-400 border-purple-300 hover:border-purple-500 text-sm border-2 text-purple-600 py-1 px-2 rounded" type="submit">Twoot</button>
</div>
