@extends('layouts.app')

@section('content')
<div class="mx-auto w-1/3">
    <form method="POST" action="/feed" class="w-full">
        @include('includes.form')
    </form>
    @foreach($posts as $post)
        @include('includes.post')
    @endforeach
</div>
@endsection
