@extends('layouts.master')

@section('body-class')
bg-gradient-to-br from-red-600 to-orange-500
@endsection

@section('content')
<!-- Login Form -->
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white/90 backdrop-blur-lg rounded-2xl shadow-2xl p-8 border border-white/20">
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-full pizza-bg flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                <i class="fa-solid fa-pizza-slice"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-900">Login</h2>
            <p class="text-gray-600 mt-2">Welcome back to Pizzaro</p>
        </div>

        <form id="loginForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="you@example.com">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="w-4 h-4 rounded">
                    <span class="text-sm text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-red-600 hover:text-red-700">Forgot password?</a>
            </div>

            <button type="submit" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 hover:scale-[1.02] transition">
                Sign In
            </button>
        </form>

        <p class="mt-8 text-center text-gray-600">
            Don&apos;t have an account?
            <a href="register.html" class="text-red-600 font-bold hover:text-red-700">Sign up</a>
        </p>
    </div>
</div>
@endsection
