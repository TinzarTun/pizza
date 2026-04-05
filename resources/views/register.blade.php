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

        <form action="{{ route('register') }}" id="registerForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="John Doe">
            </div>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="you@example.com">
            </div>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="+1 (555) 123-4567">
            </div>
            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                <input type="text" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="123 Main St">
            </div>
            @error('address')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="••••••••">
            </div>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="••••••••">
            </div>
            @error('password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="flex items-center gap-2">
                <input type="checkbox" name="terms" class="w-4 h-4 rounded">
                <span class="text-sm text-gray-600">I agree to the Terms and Conditions</span>
            </label>
            @error('terms')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 hover:scale-[1.02] transition">
                Create Account
            </button>
        </form>

        <p class="mt-8 text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-red-600 font-bold hover:text-red-700">Sign in</a>
        </p>
    </div>
</div>
@endsection
