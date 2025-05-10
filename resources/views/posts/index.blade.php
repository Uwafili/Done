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



<div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 bg-white">
    <!-- Personal Insurance Card -->
    <div class="relative rounded-2xl overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
        <img src="/images/tab.jpg" alt="Personal Gadget" class="absolute inset-0 w-full h-full object-cover opacity-60">
        <div class="relative bg-black bg-opacity-70 text-white p-6 h-full flex flex-col justify-between">
            <h2 class="text-2xl font-bold text-yellow-400 mb-3">Personal Gadget Insurance</h2>
            <p class="text-gray-200 mb-5">
                Protect your personal gadgets like smartphones, laptops, and tablets against theft, accidental damage, and spills. Premium protection made simple.
            </p>
            <a href=""
               class="inline-flex items-center gap-2 text-yellow-400 hover:text-yellow-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
                <span class="font-medium">Quote</span>
            </a>
        </div>
    </div>

    <!-- Business Insurance Card -->
    <div class="relative rounded-2xl overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
        <img src="/images/smartwatch.jpg" alt="Business Gadget" class="absolute inset-0 w-full h-full object-cover opacity-60">
        <div class="relative bg-black bg-opacity-70 text-white p-6 h-full flex flex-col justify-between">
            <h2 class="text-2xl font-bold text-yellow-400 mb-3">Business Gadget Insurance</h2>
            <p class="text-gray-200 mb-5">
                Insure your company gadgets — phones, laptops, POS systems, and more. Ideal for teams and tech-driven businesses seeking reliable protection.
            </p>
            <a href=""
               class="inline-flex items-center gap-2 text-yellow-400 hover:text-yellow-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
                <span class="font-medium">Quote</span>
            </a>
        </div>
    </div>
</div>



<!-- Get Insured in 3 Easy Steps Section -->
<div 
    class="list bg-cover bg-center bg-no-repeat" 
    style="
        background-image: url('/images/insurance-bg.jpg'); 
        width: auto; 
        height: fit-content; 
        padding: 40px 20px;
    "
>
<div class="p-8 rounded-xl max-w-5xl mx-auto mt-16 text-center bg-cover bg-center bg-no-repeat"
style="background-image: url('/images/flat.jpg');">
<h2 class="text-3xl md:text-4xl font-bold mb-8 text-black">
    Get Insured in <span class="text-yellow-600">3 Easy Steps</span>
</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Step 1: Choose Your Item -->
    <div class="p-6 border bg-white bg-opacity-80 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex justify-center mb-4 animate-bounce">
            <lottie-player 
                src="https://cdn.lordicon.com/qghrdngw.json"
                background="transparent" 
                speed="1" 
                style="width: 60px; height: 60px;" 
                loop autoplay>
            </lottie-player>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-black">Choose Your Item</h3>
        <p class="text-gray-700">Select a gadget or item you'd like to protect from our coverage list.</p>
    </div>

    <!-- Step 2: Select a Plan -->
    <div class="p-6 border bg-white bg-opacity-80 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex justify-center mb-4 animate-bounce">
            <lottie-player 
                src="https://cdn.lordicon.com/dnoiydox.json"
                background="transparent" 
                speed="1" 
                style="width: 60px; height: 60px;" 
                loop autoplay>
            </lottie-player>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-black">Select a Plan</h3>
        <p class="text-gray-700">Pick a flexible, affordable plan that suits your needs and lifestyle.</p>
    </div>

    <!-- Step 3: Get Instant Coverage -->
    <div class="p-6 border bg-white bg-opacity-80 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex justify-center mb-4 animate-bounce">
            <lottie-player 
                src="https://cdn.lordicon.com/egmlnyku.json"
                background="transparent" 
                speed="1" 
                style="width: 60px; height: 60px;" 
                loop autoplay>
            </lottie-player>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-black">Get Instant Coverage</h3>
        <p class="text-gray-700">Make payment and receive your digital policy immediately in your inbox.</p>
    </div>
</div>
</div>
</div>
<section class="bg-white py-10 px-6">
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-2">Choose Your Insurance Plan</h2>
        <p class="text-gray-600 max-w-xl mx-auto">Flexible gadget protection plans tailored for individuals, families, and businesses. Pick what fits you best.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Bronze Tier -->
        <div class="bg-gray-100 rounded-2xl p-6 shadow-md hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-xl font-bold text-yellow-700 mb-2">Bronze</h3>
            <p class="mb-4 text-sm text-gray-600">Basic plan for individuals with 1 gadget.</p>
            <ul class="mb-4 space-y-1 text-sm text-gray-700">
                <li>✔ 1 Device</li>
                <li>✔ Theft & Damage</li>
                <li>✖ Fast Claims</li>
                <li>✖ Multi-device Discount</li>
            </ul>
            <p class="font-bold text-yellow-700 text-lg mb-3">$4.99/month</p>
            <a href="#" class="block text-center bg-yellow-700 text-white py-2 rounded-full hover:bg-yellow-800 transition">Choose Bronze</a>
        </div>

        <!-- Silver Tier -->
        <div class="bg-gray-100 rounded-2xl p-6 shadow-md hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Silver</h3>
            <p class="mb-4 text-sm text-gray-600">Protection for up to 3 gadgets with faster service.</p>
            <ul class="mb-4 space-y-1 text-sm text-gray-700">
                <li>✔ Up to 3 Devices</li>
                <li>✔ Theft & Accidental Damage</li>
                <li>✔ 48hr Claims</li>
                <li>✖ Priority Support</li>
            </ul>
            <p class="font-bold text-gray-800 text-lg mb-3">$9.99/month</p>
            <a href="#" class="block text-center bg-gray-800 text-white py-2 rounded-full hover:bg-black transition">Choose Silver</a>
        </div>

        <!-- Gold Tier -->
        <div class="bg-yellow-100 rounded-2xl p-6 shadow-md hover:shadow-lg transform transition hover:scale-105 border-2 border-yellow-500">
            <h3 class="text-xl font-bold text-yellow-700 mb-2">Gold</h3>
            <p class="mb-4 text-sm text-yellow-800">Best for families or tech lovers with multiple devices.</p>
            <ul class="mb-4 space-y-1 text-sm text-yellow-900">
                <li>✔ Up to 5 Devices</li>
                <li>✔ Theft, Damage, Liquid</li>
                <li>✔ 24hr Claims</li>
                <li>✔ Priority Support</li>
            </ul>
            <p class="font-bold text-yellow-800 text-lg mb-3">$14.99/month</p>
            <a href="#" class="block text-center bg-yellow-700 text-white py-2 rounded-full hover:bg-yellow-800 transition">Choose Gold</a>
        </div>

        <!-- Platinum Tier -->
        <div class="bg-black text-white rounded-2xl p-6 shadow-md hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-xl font-bold text-yellow-400 mb-2">Platinum</h3>
            <p class="mb-4 text-sm text-gray-300">Ultimate protection for families or small businesses.</p>
            <ul class="mb-4 space-y-1 text-sm text-gray-100">
                <li>✔ Unlimited Devices</li>
                <li>✔ All-Risk Protection</li>
                <li>✔ 12hr Claims</li>
                <li>✔ Dedicated Support</li>
            </ul>
            <p class="font-bold text-yellow-400 text-lg mb-3">$24.99/month</p>
            <a href="#" class="block text-center bg-yellow-400 text-black py-2 rounded-full hover:bg-yellow-300 transition">Choose Platinum</a>
        </div>
    </div>
</section>



<section class="bg-white py-16 px-6">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Insurance for Your Everyday Needs</h2>
        <p class="text-gray-600 text-lg">
            From your personal gadgets to your business tech, our insurance solutions are designed to fit your lifestyle and protect your most valuable devices.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <!-- 1. Smartphones -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-yellow-100 via-yellow-300 to-yellow-500 text-black">
            <img src="{{ asset('images/smart-phone.jpg') }}" alt="Smartphone Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Smartphones</h3>
                <p class="text-sm">
                    Stay protected against drops, theft, and water damage with fast repair or replacement for your phone.
                </p>
            </div>
        </div>

        <!-- 2. Laptops -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-gray-100 via-gray-300 to-gray-500 text-black">
            <img src="{{ asset('images/two.jpg') }}" alt="Laptop Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Laptops</h3>
                <p class="text-sm">
                    Essential for work or school? Protect your laptop from accidents, spills, and power damage.
                </p>
            </div>
        </div>

        <!-- 3. Tablets -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-orange-100 via-orange-300 to-orange-500 text-black">
            <img src="{{ asset('images/tab.jpg') }}" alt="Tablet Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Tablets</h3>
                <p class="text-sm">
                    Coverage for your iPad or Android tablet, perfect for kids, creatives, and professionals on the go.
                </p>
            </div>
        </div>

        <!-- 4. Smartwatches -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-pink-100 via-pink-300 to-pink-500 text-black">
            <img src="{{ asset('images/smartwatch.jpg') }}" alt="Smartwatch Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Smartwatches</h3>
                <p class="text-sm">
                    Stylish and smart — your wearable tech is covered for cracks, battery issues, and water damage.
                </p>
            </div>
        </div>

        <!-- 5. Game Consoles -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-purple-100 via-purple-300 to-purple-500 text-black">
            <img src="{{ asset('images/photo.jpg') }}" alt="Game Console Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Game Consoles</h3>
                <p class="text-sm">
                    Keep the fun going with protection for PlayStation, Xbox, and Nintendo devices against accidental damage.
                </p>
            </div>
        </div>

        <!-- 6. Business Devices -->
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition transform bg-gradient-to-br from-blue-100 via-blue-300 to-blue-500 text-black">
            <img src="{{ asset('images/smart-phone.jpg') }}" alt="Business Gadget Insurance" class="w-full h-40 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">Business Gadgets</h3>
                <p class="text-sm">
                    Secure your work laptops, scanners, or POS devices with fast claims and professional support.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="bg-white py-20 px-6">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-black">
            See Why People <span class="text-yellow-500">Switch to FGRS</span>
        </h2>
        <p class="text-gray-600 mt-4 text-lg">
            Our clients trust us for reliability, speed, and unbeatable value. Explore what makes FGRS different.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <!-- Feature 1: Fast Claims -->
        <div class="p-6 bg-gradient-to-br from-yellow-100 via-yellow-200 to-yellow-300 rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                    src="https://cdn.lordicon.com/zpxybbhl.json" 
                    background="transparent" 
                    speed="1" 
                    style="width: 80px; height: 80px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold text-black mb-2 text-center">Fast Claims</h3>
            <p class="text-gray-700 text-sm text-center">
                Get your gadgets repaired or replaced in record time—no unnecessary delays.
            </p>
        </div>

        <!-- Feature 2: Affordable Plans -->
        <div class="p-6 bg-gradient-to-br from-white via-gray-100 to-yellow-100 rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                    src="https://cdn.lordicon.com/qhviklyi.json" 
                    background="transparent" 
                    speed="1" 
                    style="width: 80px; height: 80px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold text-black mb-2 text-center">Affordable Plans</h3>
            <p class="text-gray-700 text-sm text-center">
                Flexible pricing that fits your budget—starting as low as ₦500/month.
            </p>
        </div>

        <!-- Feature 3: 24/7 Support -->
        <div class="p-6 bg-gradient-to-br from-yellow-50 via-white to-gray-200 rounded-2xl shadow-md hover:shadow-xl hover:scale-105 transition">
            <div class="flex justify-center mb-4">
                <lottie-player 
                    src="https://cdn.lordicon.com/ssdupzsv.json" 
                    background="transparent" 
                    speed="1" 
                    style="width: 80px; height: 80px;" 
                    loop autoplay>
                </lottie-player>
            </div>
            <h3 class="text-xl font-semibold text-black mb-2 text-center">24/7 Support</h3>
            <p class="text-gray-700 text-sm text-center">
                Anytime you need help, we're just a message away—with real human agents.
            </p>
        </div>
    </div>
</section>


<div class="py-20 px-6 bg-gradient-to-br from-white via-yellow-50 to-yellow-100">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-12 text-black">
            See Why People Trust <span class="text-yellow-600">FGRS Insurance</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white shadow-lg rounded-xl p-6">
                <p class="text-gray-600 italic mb-4">“FGRS gave me peace of mind when my phone broke. The claim was quick and easy.”</p>
                <div class="flex items-center gap-4">
                    <img src="/images/photo.jpg" class="w-12 h-12 rounded-full border" alt="Sarah Johnson">
                    <div class="text-left">
                        <p class="font-semibold text-black">Sarah Johnson</p>
                        <p class="text-sm text-gray-500">Lagos, Nigeria</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white shadow-lg rounded-xl p-6">
                <p class="text-gray-600 italic mb-4">“Reliable gadget coverage for our company. No stress and great support.”</p>
                <div class="flex items-center gap-4">
                    <img src="/images/smartwatch.jpg" class="w-12 h-12 rounded-full border" alt="Michael Adewale">
                    <div class="text-left">
                        <p class="font-semibold text-black">Michael Adewale</p>
                        <p class="text-sm text-gray-500">Abuja, Nigeria</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white shadow-lg rounded-xl p-6">
                <p class="text-gray-600 italic mb-4">“Affordable and effective insurance for my new laptop. I highly recommend FGRS.”</p>
                <div class="flex items-center gap-4">
                    <img src="/images/tab.jpg" class="w-12 h-12 rounded-full border" alt="Ada Okoro">
                    <div class="text-left">
                        <p class="font-semibold text-black">Ada Okoro</p>
                        <p class="text-sm text-gray-500">Port Harcourt</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="mt-10">
            <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-full shadow-md transition">
                View More Testimonials
            </a>
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
