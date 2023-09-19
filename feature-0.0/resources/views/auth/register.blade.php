@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-lg w-96">
        <h1 class="text-4xl font-bold mb-6 text-center">Register</h1>
        <form action="/register" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="you@example.com"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="********"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Register</button>
            </div>
        </form>
        <p class="text-gray-600 text-sm">Registering takes only a few minutes. We'll ask you for some basic information to get started.</p>
    </div>
</div>
@endsection
