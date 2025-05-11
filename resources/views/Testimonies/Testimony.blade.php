@extends('layouts.layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 py-16 px-6 text-white">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">What Our Clients Are Saying About Us</h2>
        <p class="text-lg text-gray-300 mb-12">Real feedback from satisfied clients who trust us to protect their valuable gadgets.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 text-left">
            @foreach([
                ['name'=>'Olivia Brown','role'=>'Content Creator','text'=>'I accidentally dropped my tablet and they handled the replacement like pros. So grateful!'],
                ['name'=>'Samuel Ade','role'=>'Startup Founder','text'=>'Efficient, affordable, and dependable. My team’s devices are always protected.'],
                ['name'=>'Linda Jo','role'=>'Photographer','text'=>'Camera insurance was something I never thought I’d need — until I did. Glad I found this service!'],
                ['name'=>'Tony Web','role'=>'UX Designer','text'=>'Really smooth service and beautiful customer experience throughout the process.'],
                ['name'=>'Jessica Stone','role'=>'Freelancer','text'=>'Filing a claim was so easy and I got my phone replaced within days.'],
                ['name'=>'Ahmad Yusuf','role'=>'Tech Enthusiast','text'=>'They offer great coverage for gadgets at a fair price. I recommend it.'],
                ['name'=>'Ella Moore','role'=>'Social Media Manager','text'=>'Their protection saved me a huge cost when my device got stolen abroad.'],
                ['name'=>'Emmanuel K','role'=>'Marketing Exec','text'=>'Everything from registration to claiming insurance was very smooth.'],
                ['name'=>'Chinwe O','role'=>'Software Engineer','text'=>'When my laptop failed mid-project, they stepped in. That’s true backup!'],
                ['name'=>'Rachel G','role'=>'Law Student','text'=>'My tablet was repaired under coverage with zero stress involved. Amazing!'],
                ['name'=>'Ibrahim T','role'=>'Retail Manager','text'=>'The best investment I’ve made for my store’s devices. Highly reliable.'],
                ['name'=>'Grace F','role'=>'Blogger','text'=>'Coverage is fast and fair. No hidden tricks. Just good service.'],
                ['name'=>'Daniel K','role'=>'Engineer','text'=>'Lost my phone to theft. They reimbursed me fast and fully.'],
                ['name'=>'Tolu A','role'=>'Gadget Reviewer','text'=>'Good rates. Good service. This is my third year renewing with them.'],
                ['name'=>'Nadia H','role'=>'Health Tech Officer','text'=>'Work laptops, phones, all secured. I love the peace of mind.'],
                ['name'=>'Michael Dee','role'=>'DJ','text'=>'My audio gear got damaged at an event. Got it sorted without delay.']
            ] as $client)
                <div class="bg-white bg-opacity-10 backdrop-blur-md p-6 rounded-xl hover:bg-opacity-20 transition duration-300">
                    <h3 class="text-lg font-semibold mb-1">{{ $client['name'] }}</h3>
                    <p class="text-yellow-300 text-sm mb-2">{{ $client['role'] }}</p>
                    <p class="text-gray-300 text-sm italic">"{{ $client['text'] }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
