@extends('layouts.master')

@section('body-class')
bg-gradient-to-br from-red-600 to-orange-500
@endsection

@section('content')
<!-- Register Form -->
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white/90 backdrop-blur-lg rounded-2xl shadow-2xl p-8 border border-white/20">
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-full pizza-bg flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                <i class="fa-solid fa-pizza-slice"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-900">Create Account</h2>
            <p class="text-gray-600 mt-2">Join us for delicious pizza delivery</p>
        </div>

        <form id="registerForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="John Doe">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="you@example.com">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="+1 (555) 123-4567">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="123 Main St">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="••••••••">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="••••••••">
            </div>

            <label class="flex items-center gap-2">
                <input type="checkbox" required class="w-4 h-4 rounded">
                <span class="text-sm text-gray-600">I agree to the Terms and Conditions</span>
            </label>

            <button type="submit" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 hover:scale-[1.02] transition">
                Create Account
            </button>
        </form>

        <p class="mt-8 text-center text-gray-600">
            Already have an account?
            <a href="login.html" class="text-red-600 font-bold hover:text-red-700">Sign in</a>
        </p>
    </div>
</div>
@endsection
