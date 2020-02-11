@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs m-auto">
    <form method="POST" action="{{ route('register') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Username</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                id="name"
                type="text"
                placeholder="Username"
                name="name"
                value="{{ old('name') }}"
                required
                autocomplete="name"
                autofocus>
                @error('name')
                    <span class="invalid-feedback text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
            <input
                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                id="email"
                type="email"
                placeholder="Email@Email.com"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email">
                @error('email')
                    <span class="invalid-feedback text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">{{ __('Password') }}</label>
            <input
                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                id="password"
                type="password"
                placeholder="********"
                name="password"
                required>
                @error('password')
                    <span class="invalid-feedback text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
            <input
                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password-confirm"
                type="password"
                placeholder="********"
                name="password_confirmation"
                required>
        </div>
        <div class="flex items-center justify-between">
            <button class="font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection
