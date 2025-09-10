@extends('layouts.layout')
@section('content')
<!-- Hero Section -->
<div class="relative min-h-[60vh] flex items-center justify-center bg-gradient-to-br from-yellow-400 via-yellow-500 to-[#1a1a1a]">
    <img src="/images/modern.avif" alt="Gadget Insurance" class="absolute inset-0 w-full h-full object-cover opacity-30 z-0" />
    <div class="relative z-10 text-center px-4 py-24">
        <h1 class="text-5xl md:text-6xl font-extrabold text-yellow-400 mb-6 drop-shadow-lg">Protect Your Gadgets, Anytime, Anywhere</h1>
        <p class="text-lg md:text-xl text-gray-100 mb-8">Flexible insurance plans for your devices, family, and business. Peace of mind for your tech investments.</p>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 px-8 rounded-lg shadow-lg text-lg transition">Get Started</a>
    </div>
</div>

<!-- Product Cards Section -->
<div class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Single Device Card -->
    <div class="bg-[#1a1a1a] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <svg class="h-16 w-16 text-yellow-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z" />
        </svg>
        <h2 class="text-2xl font-bold text-yellow-400 mb-2">Single Device</h2>
        <p class="text-gray-300 mb-4">Protect your smartphone, tablet, or wearable with affordable coverage and fast claims.</p>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow">Learn More</a>
    </div>
    <!-- Multi-Gadget Card -->
    <div class="bg-[#1a1a1a] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <svg class="h-16 w-16 text-yellow-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7a2 2 0 012-2h2a2 2 0 012 2v10m-6 0h6" />
            <rect x="3" y="13" width="18" height="8" rx="2" />
        </svg>
        <h2 class="text-2xl font-bold text-yellow-400 mb-2">Multi-Gadget</h2>
        <p class="text-gray-300 mb-4">Bundle multiple devices—phones, laptops, tablets—under one plan for maximum value.</p>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow">Learn More</a>
    </div>
    <!-- Family & Business Card -->
    <div class="bg-[#1a1a1a] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <svg class="h-16 w-16 text-yellow-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20h6M3 20h5v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <h2 class="text-2xl font-bold text-yellow-400 mb-2">Family & Business</h2>
        <p class="text-gray-300 mb-4">Comprehensive protection for families and businesses. Cover all your tech with one flexible plan.</p>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow">Learn More</a>
    </div>
</div>

<!-- Over 7000 Health Providers Section -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 rounded-xl shadow-2xl p-10 text-center">
        <h2 class="text-3xl font-extrabold text-white mb-4">Over 7,000 Health Providers</h2>
        <p class="text-lg text-blue-100 mb-6">Our network spans across continents, giving you access to top healthcare and gadget insurance support wherever you are.</p>
        <div class="flex flex-col md:flex-row justify-center gap-8">
            <div class="bg-white bg-opacity-10 rounded-lg p-6 shadow-lg flex-1">
                <h3 class="text-xl font-bold text-cyan-200 mb-2">6 Continents</h3>
                <p class="text-blue-100">Global reach for your peace of mind.</p>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-6 shadow-lg flex-1">
                <h3 class="text-xl font-bold text-blue-200 mb-2">170+ Countries</h3>
                <p class="text-blue-100">Coverage wherever you travel or live.</p>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-6 shadow-lg flex-1">
                <h3 class="text-xl font-bold text-purple-200 mb-2">9,000+ Cities</h3>
                <p class="text-blue-100">Local support, global protection.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

@endsection