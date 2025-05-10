@extends('layouts.layout')

<style>
  body {
    background-image: url('/images/artificial.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
</style>

@section('content')
<div class="max-w-lg mx-auto p-8 mt-20 border rounded-xl shadow-lg backdrop-blur-md bg-white bg-opacity-10 text-white">
  <h2 class="text-2xl font-bold mb-6 text-center">Sign-Up</h2>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Full Name</label>
      <div class="flex items-center bg-transparent border border-white rounded px-3 py-2">
        <i class="fas fa-user mr-2 text-yellow-400"></i>
        <input type="text" name="name" class="w-full bg-transparent text-white placeholder-white focus:outline-none" placeholder="John Doe" value="{{ old('name') }}">
      </div>
      @error('name')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Email Address</label>
      <div class="flex items-center bg-transparent border border-white rounded px-3 py-2">
        <i class="fas fa-envelope mr-2 text-yellow-400"></i>
        <input type="email" name="email" class="w-full bg-transparent text-white placeholder-white focus:outline-none" placeholder="john@example.com" value="{{ old('email') }}">
      </div>
      @error('email')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Phone -->
    <div class="mb-4">
      <label class="block text-sm mb-1">Phone Number</label>
      <div class="flex bg-transparent border border-white rounded">
        <select name="country_code" class="bg-transparent text-white border-r px-2 text-sm">
          <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>🇺🇸 +1</option>
          <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>🇬🇧 +44</option>
          <option value="+234" {{ old('country_code') == '+234' ? 'selected' : '' }}>🇳🇬 +234</option>
          <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>🇮🇳 +91</option>
        </select>
        <input type="tel" name="phone" class="w-full px-3 py-2 bg-transparent text-white placeholder-white focus:outline-none" placeholder="1234567890" value="{{ old('phone') }}">
      </div>
      @error('phone')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Password -->
<div class="mb-4">
  <label class="block text-sm mb-1">Password</label>
  <div class="flex items-center bg-white/10 text-white rounded px-3 py-2 backdrop-blur-md relative">
    <i class="fas fa-lock mr-2 text-yellow-400"></i>
    <input type="password" name="password" id="password" class="w-full bg-transparent focus:outline-none" placeholder="••••••••">
    <span id="togglePassword" class="absolute right-3 cursor-pointer text-yellow-400 transition duration-300 ease-in-out">
      <i class="fas fa-eye" id="passwordIcon"></i>
    </span>
  </div>
</div>

<!-- Confirm Password -->
<div class="mb-6">
  <label class="block text-sm mb-1">Confirm Password</label>
  <div class="flex items-center bg-white/10 text-white rounded px-3 py-2 backdrop-blur-md relative">
    <i class="fas fa-lock mr-2 text-yellow-400"></i>
    <input type="password" name="password_confirmation" id="confirmPassword" class="w-full bg-transparent focus:outline-none" placeholder="••••••••">
    <span id="toggleConfirmPassword" class="absolute right-3 cursor-pointer text-yellow-400 transition duration-300 ease-in-out">
      <i class="fas fa-eye" id="confirmIcon"></i>
    </span>
  </div>
</div>

    

    <!-- Submit -->
    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 rounded">
      Sign Up
    </button>
  </form>
</div>
@endsection
<script>
  const togglePassword = document.getElementById('togglePassword');
  const password = document.getElementById('password');
  const passwordIcon = document.getElementById('passwordIcon');

  togglePassword.addEventListener('click', () => {
    const isVisible = password.type === 'text';
    password.type = isVisible ? 'password' : 'text';

    passwordIcon.classList.add('opacity-0', 'scale-90');
    setTimeout(() => {
      passwordIcon.className = isVisible
        ? 'fas fa-eye opacity-100 scale-100 transition duration-300 ease-in-out'
        : 'fas fa-eye-slash opacity-100 scale-100 transition duration-300 ease-in-out';
    }, 150);
  });

  const toggleConfirm = document.getElementById('toggleConfirmPassword');
  const confirmPassword = document.getElementById('confirmPassword');
  const confirmIcon = document.getElementById('confirmIcon');

  toggleConfirm.addEventListener('click', () => {
    const isVisible = confirmPassword.type === 'text';
    confirmPassword.type = isVisible ? 'password' : 'text';

    confirmIcon.classList.add('opacity-0', 'scale-90');
    setTimeout(() => {
      confirmIcon.className = isVisible
        ? 'fas fa-eye opacity-100 scale-100 transition duration-300 ease-in-out'
        : 'fas fa-eye-slash opacity-100 scale-100 transition duration-300 ease-in-out';
    }, 150);
  });
</script>


