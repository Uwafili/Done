@extends('layouts.layout')

@section('content')
<!-- Header with background image -->
<div class="relative bg-cover bg-center h-[350px]" style="background-image: url('/images/history-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Our Story</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">The legacy, milestones, and evolution of FGRS—committed to protecting your gadgets and digital life.</p>
        </div>
    </div>
</div>

<!-- History Content -->
<section class="bg-gray-100 text-gray-800 py-16 px-6">
    <div class="max-w-5xl mx-auto space-y-12">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">2015 — The Birth of an Idea</h2>
            <p class="text-lg">
                FGRS was born from the realization that gadgets were becoming more essential than ever—and more vulnerable. Founded by three tech enthusiasts, our mission was simple: make gadget insurance accessible and trustworthy.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">2017 — Building Trust and Expanding Services</h2>
            <p class="text-lg">
                We began offering insurance for tablets, smartwatches, and laptops. Our customer-first approach earned us a loyal client base and partnerships with device retailers across the region.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">2019 — Technology Meets Protection</h2>
            <p class="text-lg">
                FGRS launched its digital platform, enabling fast sign-ups, easy claims, and round-the-clock support. Automation reduced claim processing time, while our AI tools began flagging fraud more effectively.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">2022 — More Than Insurance</h2>
            <p class="text-lg">
                Our offerings expanded into services like accidental protection, theft recovery, repair concierge, and extended warranties. We became a true tech-care company.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">2024 — A Trusted Name in Gadget Security</h2>
            <p class="text-lg">
                With over 150,000 active policies, FGRS became known for fast, fair, and friendly support. Our team grew, our impact expanded, but our mission stayed the same: protect what powers your life.
            </p>
        </div>
    </div>
</section>
@endsection
