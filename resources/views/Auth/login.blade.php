@extends('layouts.layout')

@section('content')
<style>
  body {
    background-image: url('/images/artificial.jpg'); /* Replace with your insurance-related image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
</style>

<div class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-white/10 backdrop-blur-md text-white rounded-2xl shadow-xl p-8 mx-4 mt-20">
    <h2 class="text-3xl font-bold text-center mb-6">Welcome Back</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email -->
      <div class="mb-4">
        <label class="block text-sm mb-1">Email Address</label>
        <div class="flex items-center bg-white/10 px-3 py-2 rounded">
          <i class="fas fa-envelope mr-2 text-yellow-400"></i>
          <input type="email" name="email" class="w-full bg-transparent text-white focus:outline-none" placeholder="you@example.com" value="{{ old('email') }}">
        </div>
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label class="block text-sm mb-1">Password</label>
        <div class="flex items-center bg-white/10 px-3 py-2 rounded relative">
          <i class="fas fa-lock mr-2 text-yellow-400"></i>
          <input type="password" name="password" id="loginPassword" class="w-full bg-transparent text-white focus:outline-none" placeholder="••••••••">
          <span id="toggleLoginPassword" class="absolute right-3 cursor-pointer text-yellow-400">
            <i class="fas fa-eye" id="loginPasswordIcon"></i>
          </span>
        </div>
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center">
          <input type="checkbox" name="remember" class="form-checkbox text-yellow-500">
          <span class="ml-2 text-sm">Remember me</span>
        </label>
        <a href="" class="text-sm text-yellow-400 hover:text-yellow-300">Forgot Password?</a>
      </div>

      <!-- Submit -->
      <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 rounded transition">
        Login
      </button>
    </form>

    <p class="text-center text-sm mt-6">
      Don't have an account? 
      <a href="{{ route('register') }}" class="text-yellow-400 hover:text-yellow-300 font-medium">Sign Up</a>
    </p>
  </div>
</div>

<script>
  const toggleLoginPassword = document.getElementById('toggleLoginPassword');
  const loginPassword = document.getElementById('loginPassword');
  const loginPasswordIcon = document.getElementById('loginPasswordIcon');

  toggleLoginPassword.addEventListener('click', () => {
    const isVisible = loginPassword.type === 'text';
    loginPassword.type = isVisible ? 'password' : 'text';
    loginPasswordIcon.className = isVisible ? 'fas fa-eye' : 'fas fa-eye-slash';
  });
</script>
@endsection
