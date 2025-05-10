@extends('layouts.layout')

@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center py-12">
    <div style="padding: 24px;">
        <h1 class="text-4xl md:text-5xl font-bold text-black leading-tight">
            Secure the Everyday<br>
            Essentials <span class="text-yellow-400">That</span><br>
            Keep Life <span class="text-yellow-400" style="font-size: 1.2em">Moving!!</span>
        </h1>
        <p class="mt-4 text-gray-700 text-lg">
            Affordable protection for the everyday tools that keep your goals within reach — even when life gets unpredictable.
        </p>
        <div class="mt-6 flex flex-wrap gap-4">
            <button class="bg-black text-yellow-400 px-6 py-3 rounded-lg font-semibold hover:bg-gray-800">
                Book a FREE call now
            </button>
            <button class="border border-black text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-100">
                Chat with us
            </button>
        </div>
    </div>

    <!-- Circular Slideshow -->
    <div class="relative flex items-center justify-center h-80">
        <div class="relative w-80 h-80">
            <img src="{{ asset('images/one.jpg') }}" class="circle-image active" />
            <img src="{{ asset('images/two.jpg') }}" class="circle-image" />
            <img src="{{ asset('images/three.jpg') }}" class="circle-image" />
        </div>
    </div>
</div>

<!-- Get Insured in 3 Easy Steps Section -->
<div class="max-w-5xl mx-auto mt-16 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-black">
        Get Insured in <span class="text-yellow-400">3 Easy Steps</span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="p-6 border rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                src="https://cdn.lordicon.com/lewtedlh.json"
                                    background="transparent" 
                    speed="1" 
                    style="width: 100px; height: 100px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold mb-2">Choose Your Item</h3>
            <p class="text-gray-600">Select a gadget or item you'd like to protect from our coverage list.</p>
        </div>

        <!-- Step 2 -->
        <div class="p-6 border rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                src="https://cdn.lordicon.com/lewtedlh.json"
                    background="transparent" 
                    speed="1" 
                    style="width: 100px; height: 100px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold mb-2">Select a Plan</h3>
            <p class="text-gray-600">Pick a flexible, affordable plan that suits your needs and lifestyle.</p>
        </div>

        <!-- Step 3 -->
        <div class="p-6 border rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                src="https://cdn.lordicon.com/lewtedlh.json"
                    background="transparent" 
                    speed="1" 
                    style="width: 100px; height: 100px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold mb-2">Get Instant Coverage</h3>
            <p class="text-gray-600">Make payment and receive your digital policy immediately in your inbox.</p>
        </div>
    </div>
</div>

@endsection

<style>
    .circle-image {
        position: absolute;
        top: 60%;
        left: 50%;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        opacity: 0;
        transition: all 1s ease-in-out;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .circle-image.active {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
        z-index: 1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('.circle-image');
        let current = 0;

        function rotateImages() {
            images.forEach(img => img.classList.remove('active'));
            images[current].classList.add('active');
            current = (current + 1) % images.length;
        }

        rotateImages(); // Show the first image
        setInterval(rotateImages, 3000); // Rotate every 3 seconds
    });
</script>
