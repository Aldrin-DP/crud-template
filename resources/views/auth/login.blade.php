@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center h-[calc(100vh-200px)]">
        <form action="/login" class="rounded shadow bg-gray-700 text-white opacity-90 p-3 w-3/12" method="POST">
            @csrf
            <h2 class="font-semibold text-lg border-b border-gray-600 pb-1 text-center">Login</h2>
            <div class="mt-1">
                <label for="email" class="block">Email Address</label>
                <input value="{{ old('email') }}" type="email" id="email" name="email" class="w-full border bg-gray-500 border-gray-600 rounded px-3 py-1" placeholder="Email address">
                @error('email')
                    <span class="text-sm text-red-400"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mt-1">
                <label for="password" class="block">Password</label>
                <input type="password" id="password" name="password" class="w-full border bg-gray-500 border-gray-600 rounded px-3 py-1" placeholder="Password">
                @error('password')
                    <span class="text-sm text-red-400"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mt-3">
                <button class="w-full bg-gray-100 text-black rounded px-3 py-1 uppercase tracking-wide cursor-pointer">Login</button>
            </div>
            <div class="mt-2">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-300">Register here</a>
            </div>
        </form>
    </div>
@endsection