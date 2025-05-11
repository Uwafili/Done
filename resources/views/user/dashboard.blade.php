@extends('layouts.layout')

@section('content')
<br>
<br>
<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-white to-yellow-100 py-10">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Welcome, {{ Auth::user()->name }}</h1>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-gradient-to-br from-yellow-400 via-yellow-500 to-yellow-600 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <i class="fas fa-shield-alt text-white text-4xl mb-3"></i>
                <p class="text-2xl font-bold text-white">3</p>
                <p class="text-white text-lg">Active Policies</p>
            </div>
            <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <i class="fas fa-file-alt text-white text-4xl mb-3"></i>
                <p class="text-2xl font-bold text-white">1</p>
                <p class="text-white text-lg">Pending Claims</p>
            </div>
            <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <i class="fas fa-bell text-white text-4xl mb-3"></i>
                <p class="text-2xl font-bold text-white">4</p>
                <p class="text-white text-lg">Notifications</p>
            </div>
            <div class="bg-gradient-to-br from-indigo-400 via-indigo-500 to-indigo-600 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <i class="fas fa-clock text-white text-4xl mb-3"></i>
                <p class="text-2xl font-bold text-white">5 min</p>
                <p class="text-white text-lg">Last Login</p>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- My Policies -->
            <div class="bg-gradient-to-br from-yellow-500 via-yellow-600 to-yellow-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-shield-alt text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">My Policies</h2>
                </div>
                <p class="text-white">View and manage your active insurance policies. Stay on top of your coverage and renew when needed.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>

            <!-- Make a Claim -->
            <div class="bg-gradient-to-br from-green-500 via-green-600 to-green-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-file-alt text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">Make a Claim</h2>
                </div>
                <p class="text-white">Easily file a new claim or check your claim status. We make it simple and hassle-free.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>

            <!-- Profile -->
            <div class="bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-user-cog text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">My Profile</h2>
                </div>
                <p class="text-white">Update your account details and manage your preferences here.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>

            <!-- Notifications -->
            <div class="bg-gradient-to-br from-indigo-500 via-indigo-600 to-indigo-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-bell text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">Notifications</h2>
                </div>
                <p class="text-white">Stay updated with the latest alerts and messages about your policies and claims.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>

            <!-- Support -->
            <div class="bg-gradient-to-br from-purple-500 via-purple-600 to-purple-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-headset text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">Support</h2>
                </div>
                <p class="text-white">Need help? Contact our support team for assistance with any insurance-related queries.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>

            <!-- Settings -->
            <div class="bg-gradient-to-br from-pink-500 via-pink-600 to-pink-700 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center mb-4 text-white">
                    <i class="fas fa-cogs text-3xl mr-3"></i>
                    <h2 class="text-2xl font-semibold">Settings</h2>
                </div>
                <p class="text-white">Manage preferences, security settings, and notifications to tailor your experience.</p>
                <a href="#" class="text-white font-medium mt-3 inline-block hover:underline">View Details</a>
            </div>
        </div>
    </div>
</div>
@endsection
