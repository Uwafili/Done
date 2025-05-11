@extends('layouts.layout')
@section('content')

<!-- Slideshow -->
<div 
    x-data="{
        active: 0,
        slides: [
            { image: '/images/photo.jpg', text: 'Affordable Gadget Protection' },
            { image: '/images/people.avif', text: 'Peace of Mind, Always' },
            { image: '/images/tab.jpg', text: 'Insure. Relax. Repeat.' }
        ],
        next() { this.active = (this.active + 1) % this.slides.length },
        prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length },
        autoSlide() {
            setInterval(() => this.next(), 5000)
        }
    }" 
    x-init="autoSlide()" 
    class="relative max-w-6xl mx-auto mt-10 rounded-xl overflow-hidden shadow-lg"
>

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div 
            x-show="active === index" 
            class="h-[400px] w-full bg-cover bg-center flex items-center justify-center transition-all duration-1000" 
            :style="'background-image: url(' + slide.image + ')'">
            <div class="bg-black bg-opacity-50 w-full h-full flex items-center justify-center">
                <h2 class="text-white text-3xl md:text-4xl font-bold px-6" x-text="slide.text"></h2>
            </div>
        </div>
    </template>

    <!-- Navigation Buttons -->
    <button @click="prev()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 rounded-full p-2 hover:bg-opacity-100 transition">
        <svg class="w-6 h-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button @click="next()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 rounded-full p-2 hover:bg-opacity-100 transition">
        <svg class="w-6 h-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>

<!-- Personal Insurance Section -->
<div class="max-w-5xl mx-auto mt-20 px-6 py-12 bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-yellow-600 mb-6">Personal Gadget Insurance</h2>
    <p class="text-lg text-gray-700 mb-4 text-center">
        In today's fast-paced world, your personal gadgets are essential. Our insurance protects your phones, laptops, tablets, and smartwatches against theft, spills, and accidental damage.
    </p>
    <ul class="list-disc pl-6 text-gray-800 mb-6">
        <li>✅ Accidental damage (cracks, spills, drops)</li>
        <li>✅ Theft or loss</li>
        <li>✅ Fire or water damage</li>
        <li>✅ Mechanical or electrical breakdowns</li>
    </ul>
</div>



<!-- Our Services Section -->
<div class="max-w-6xl mx-auto mt-20 px-6 py-12">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-yellow-600 mb-10">Our Insurance Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Service 1 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
            <img src="/images/tab.jpg" alt="Phone Insurance" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Smartphone Insurance</h3>
                <p class="text-gray-600 text-sm">
                    Protect your phone from screen cracks, spills, and theft. Stay connected with peace of mind.
                </p><br>
                <a href="#" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-4 py-2 rounded transition">
                    View Details
                </a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
            <img src="/images/smartwatch.jpg" alt="Laptop Insurance" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Laptop Insurance</h3>
                <p class="text-gray-600 text-sm">
                    Insure your personal or business laptop against damage, loss, or hardware failure.
                </p><br>
                <a href="#" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-4 py-2 rounded transition">
                    View Details
                </a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
            <img src="/images/smartwatch.jpg" alt="Tablet Insurance" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Tablet & Smartwatch</h3>
                <p class="text-gray-600 text-sm">
                    Coverage for tablets, smartwatches, and other gadgets to keep your digital life running smoothly.
                </p> <br>
                <a href="#" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-4 py-2 rounded transition">
                    View Details
                </a>
            </div>
        </div>

    </div>
</div>

@endsection

<script src="//unpkg.com/alpinejs" defer></script>
