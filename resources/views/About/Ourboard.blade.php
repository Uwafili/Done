@extends('layouts.layout')

@section('content')
<<style>
    body {
        background-image: url('/images/abstract-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Inter', sans-serif;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        backdrop-filter: blur(3px);
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
    }
</style>


<div class="relative bg-cover bg-center min-h-screen py-20 px-6" style="background-image: url('/images/team-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div class="relative z-10 max-w-7xl mx-auto text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Meet Our Board</h2>
        <p class="text-lg mb-12 max-w-2xl mx-auto">
            Our dedicated board members are the heart of our vision — combining innovation, strategy, and trust to guide your protection journey.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach ([
                ['name' => 'Dr. Olivia Stone', 'role' => 'Chairwoman', 'image' => '/images/young_one.jpg'],
                ['name' => 'Michael Grant', 'role' => 'Chief Strategy Officer', 'image' => '/images/business.avif'],
                ['name' => 'Sarah Yusuf', 'role' => 'Finance Director', 'image' => '/images/medium.avif'],
                ['name' => 'Emeka Nwosu', 'role' => 'Tech Advisor', 'image' => '/images/stylish.avif'],
                ['name' => 'Lisa Chang', 'role' => 'Legal Counsel', 'image' => '/images/portrait.avif'],
                ['name' => 'Tunde Owolabi', 'role' => 'Operations Lead', 'image' => '/images/business.avif'],
            ] as $member)
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:bg-opacity-20 transition transform hover:scale-105">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover">
                <div class="p-6 text-center text-white">
                    <h3 class="text-2xl font-bold">{{ $member['name'] }}</h3>
                    <p class="text-yellow-300 text-sm mt-2">{{ $member['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
