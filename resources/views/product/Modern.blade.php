@extends('layouts.layout')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-yellow-400 via-yellow-500 to-[#1a1a1a] flex flex-col items-center justify-center p-8">
    <div class="flex flex-col md:flex-row items-center w-full max-w-5xl bg-[#1a1a1a] bg-opacity-80 rounded-xl shadow-2xl p-8 md:p-16 mb-8">
        <div class="md:w-1/2 w-full flex justify-center mb-8 md:mb-0">
            <img src="/images/modern.avif" alt="Modern Gadget Insurance" class="rounded-xl shadow-xl w-96 h-96 object-cover" />
        </div>
        <div class="md:w-1/2 w-full flex flex-col justify-center items-start md:pl-12">
            <h1 class="text-4xl font-extrabold text-yellow-400 mb-4">Modern Gadget Insurance</h1>
            <p class="text-lg text-gray-200 mb-4">Protect your devices globally with our modern insurance plans. Enjoy peace of mind, flexible coverage, and world-class support for all your valuable tech—wherever you are.</p>
            <ul class="list-disc list-inside mb-4 text-yellow-200">
                <li>Global coverage for all your gadgets</li>
                <li>Personalized and flexible insurance options</li>
                <li>Fast claims and 24/7 support</li>
                <li>Trusted by over 7,000 providers</li>
            </ul>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow">Get Started</a>
                <a href="#" class="bg-transparent border-2 border-yellow-400 text-yellow-400 font-bold py-2 px-6 rounded-lg hover:bg-yellow-400 hover:text-black transition">Learn More</a>
            </div>
        </div>
    </div>
    <div class="w-full max-w-5xl bg-[#2a2a2a] bg-opacity-90 rounded-xl shadow-xl p-8 mb-8">
        <h2 class="text-2xl font-bold text-yellow-300 mb-4">Why Choose Modern Gadget Insurance?</h2>
        <p class="text-gray-100 mb-4">Our insurance plans are designed for today's technology-driven lifestyle. Whether you own smartphones, tablets, laptops, or wearables, we offer comprehensive protection and flexible options to suit your needs.</p>
        <ul class="list-disc list-inside text-yellow-200 mb-4">
            <li>Accidental damage, theft, and loss coverage</li>
            <li>Repair and replacement for a wide range of devices</li>
            <li>Customizable bundles for individuals, families, and businesses</li>
            <li>Easy access to claims and status updates</li>
        </ul>
    </div>
    <div class="w-full max-w-5xl bg-[#1a1a1a] bg-opacity-90 rounded-xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-yellow-300 mb-4">Get Protected Today</h2>
        <p class="text-gray-100 mb-4">Join thousands of satisfied customers and providers who trust our modern insurance solutions. Secure your gadgets and enjoy peace of mind, wherever you go.</p>
        <div class="flex space-x-4 mt-4">
            <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-6 rounded-lg shadow">Sign Up Now</a>
            <a href="#" class="bg-transparent border-2 border-yellow-400 text-yellow-400 font-bold py-2 px-6 rounded-lg hover:bg-yellow-400 hover:text-black transition">Contact Us</a>
        </div>
    </div>
</div>
@endsection