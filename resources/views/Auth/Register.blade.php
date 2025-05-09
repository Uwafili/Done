@extends('layouts.layout')

<style>
  /* Custom Tailwind CSS for background image */
  body {
    background-image: url('/images/edit.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
</style>
@section('content')
<div class="max-w-lg mx-auto p-8 mt-20 border rounded-xl shadow-lg bg-gradient-to-br from-black to-yellow-500 text-white">
  <h2 class="text-2xl font-bold mb-6 text-center">Sign-Up</h2>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Full Name</label>
      <div class="flex items-center bg-white text-black rounded px-3 py-2">
        <i class="fas fa-user mr-2 text-yellow-600"></i>
        <input type="text" name="name" class="w-full focus:outline-none" placeholder="John Doe" value="{{ old('name') }}">
      </div>
      @error('name')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Email Address</label>
      <div class="flex items-center bg-white text-black rounded px-3 py-2">
        <i class="fas fa-envelope mr-2 text-yellow-600"></i>
        <input type="email" name="email" class="w-full focus:outline-none" placeholder="john@example.com" value="{{ old('email') }}">
      </div>
      @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Phone -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Phone Number</label>
      <div class="flex bg-white text-black rounded">
        <select name="country_code" class="bg-white border-r px-2 text-sm">
          <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>🇺🇸 +1</option>
          <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>🇬🇧 +44</option>
          <option value="+234" {{ old('country_code') == '+234' ? 'selected' : '' }}>🇳🇬 +234</option>
          <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>🇮🇳 +91</option>
        </select>
        <input type="tel" name="phone" class="w-full px-3 py-2 focus:outline-none" placeholder="1234567890" value="{{ old('phone') }}">
      </div>
      @error('phone')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Password -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Password</label>
      <div class="flex items-center bg-white text-black rounded px-3 py-2">
        <i class="fas fa-lock mr-2 text-yellow-600"></i>
        <input type="password" name="password" id="password" class="w-full focus:outline-none" placeholder="••••••••">
        <i class="fas fa-eye cursor-pointer ml-2 text-gray-500" id="togglePassword"></i>
      </div>
      @error('password')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-6">
      <label class="block text-sm mb-1">Confirm Password</label>
      <div class="flex items-center bg-white text-black rounded px-3 py-2">
        <i class="fas fa-lock mr-2 text-yellow-600"></i>
        <input type="password" name="password_confirmation" class="w-full focus:outline-none" placeholder="••••••••">
      </div>
    </div>

    <!-- Submit -->
    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 rounded">
      Sign Up
    </button>
  </form>
</div>

<script>
  document.getElementById('togglePassword').addEventListener('click', function () {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
  });
</script>
@endsection
</body>
</html>