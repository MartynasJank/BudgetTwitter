@extends('layouts.app')

@section('content')
<!-- POST -->
<div class="mx-auto w-2/3">
    @include('includes.post')
</div>
<!-- COMMENTS -->
<div class="mx-auto w-2/3">
    <div class="mt-5 border border-2 border-purple-300 rounded p-5 relative">
        <form method="POST" action="{{ $post->path() }}" class="w-full">
        @include('includes.form')
    </form>
    </div>
</div>

@foreach($comments as $post)
<div class="mx-auto w-2/3">
     @include('includes.post')
</div>
@endforeach
@endsection
