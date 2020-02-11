@extends('layouts.app')

@section('content')

<div class="w-full max-w-xs m-auto">
    <form method="POST" action="{{ route('login') }}" class="bg-white border border-2 border-purple-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                {{ __('E-Mail Address') }}
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                id="email"
                type="email"
                placeholder="Email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus>

                @error('email')
                    <span class="invalid-feedback text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
            </label>
            <input
                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="********">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
@endsection
