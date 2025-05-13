@extends('layouts.layout')
@section('title', 'Claims')
@section('content')
<br>
<br>
<div class="max-w-xl mx-auto mt-10">
    <h1 class="text-xl font-bold mb-4">Report a Claim</h1>
    <form method="POST" action="">
        @csrf

        <div class="mb-4">
            <label>Device Name</label>
            <input type="text" name="device_name" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>Claim Type</label>
            <select name="claim_type" class="w-full border p-2" required>
                <option value="lost">Lost</option>
                <option value="damaged">Damaged</option>
            </select>
        </div>

        <div class="mb-4">
            <label>Description (optional)</label>
            <textarea name="description" class="w-full border p-2"></textarea>
        </div>

        <button type="submit" class="bg-yellow-500 text-black px-4 py-2 rounded">Submit Claim</button>
    </form>
</div>


    {{-- <div class="max-w-3xl mx-auto mt-10">
        <h2 class="text-xl font-bold mb-4">My Claims</h2>
        @foreach ($claims as $claim)
            <div class="bg-white shadow p-4 mb-3 rounded">
                <strong>{{ $claim->device_name }}</strong> ({{ $claim->claim_type }})
                <p>{{ $claim->description }}</p>
                <p>Status: <span class="font-semibold">{{ $claim->status }}</span></p>
                <p class="text-sm text-gray-500">{{ $claim->created_at->format('d M Y') }}</p>
            </div>
        @endforeach
    </div> --}}



@endsection