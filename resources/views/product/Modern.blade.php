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

<!-- Flexible Options & Better Benefits Cards Section -->
<div class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Pulse Plan Card -->
    <div class="bg-[#232323] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <div class="bg-[#1a1a1a] rounded-lg shadow mb-4 p-2 flex items-center justify-center w-40 h-40">
            <img src="/images/smart-phone.jpg" alt="Pulse Plan" class="rounded-lg object-cover w-36 h-36" />
        </div>
        <h3 class="text-xl font-bold text-yellow-400 mb-2">Pulse Plan</h3>
        <p class="text-gray-300 mb-4">Flexible coverage for your main device. Mix and match options for your needs. Fast claims and support.</p>
        <span class="text-yellow-300 font-bold text-lg mb-2">Flexible Options</span>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow mt-2">Choose Plan</a>
    </div>
    <!-- Better Benefits Card -->
    <div class="bg-[#232323] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <div class="bg-[#1a1a1a] rounded-lg shadow mb-4 p-2 flex items-center justify-center w-40 h-40">
            <img src="/images/gadget-guard.jpg" alt="Better Benefits" class="rounded-lg object-cover w-36 h-36" />
        </div>
        <h3 class="text-xl font-bold text-yellow-400 mb-2">Better Benefits</h3>
        <p class="text-gray-300 mb-4">Enjoy premium protection: accidental damage, theft, loss, and repairs for all your gadgets. 24/7 support included.</p>
        <span class="text-yellow-300 font-bold text-lg mb-2">Premium Service</span>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow mt-2">Choose Plan</a>
    </div>
    <!-- Family & Business Card -->
    <div class="bg-[#232323] rounded-xl shadow-lg p-8 flex flex-col items-center text-center">
        <div class="bg-[#1a1a1a] rounded-lg shadow mb-4 p-2 flex items-center justify-center w-40 h-40">
            <img src="/images/family.avif" alt="Family & Business" class="rounded-lg object-cover w-36 h-36" />
        </div>
        <h3 class="text-xl font-bold text-yellow-400 mb-2">Family & Business</h3>
        <p class="text-gray-300 mb-4">Comprehensive protection for all devices in your family or business. Flexible, scalable, and premium support.</p>
        <span class="text-yellow-300 font-bold text-lg mb-2">Custom Bundles</span>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow mt-2">Choose Plan</a>
    </div>
</div>

<!-- Footer -->

@endsection