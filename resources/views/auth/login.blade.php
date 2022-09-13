@extends('layouts/app')

@section('title', 'Inicio Sesión')

@section('content')
  @if (session('login_status'))
    <div class="fixed top-0 left-0 w-full bg-red-600 p-4 text-xl font-semibold text-white">
      {{ session('login_status') }}
    </div>
  @endif
  <section class="mx-auto mt-8 max-w-md space-y-8 rounded-md p-12 shadow-lg">
    <h1 class="rounded-sm bg-sky-600 py-2 text-center text-3xl font-bold text-white">Inicio de Sesión
    </h1>
    <form action="{{ route('auth.loginStore') }}" method="POST" class="space-y-8 text-lg">
      @csrf
      <div class="space-y-2">
        <label class="font-semibold" for="email">Correo Electronico</label>
        <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600"
          value="{{ old('email') }}" placeholder="ejemplo@gmail.com" id="email" name="email"
          type="email">
        @error('email')
          <span class="font-semibold text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="space-y-2">
        <label class="font-semibold" for="password">Contraseña</label>
        <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600"
          value="{{ old('password') }}" placeholder="*******" id="password" name="password"
          type="password">
        @error('password')
          <span class="font-semibold text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit"
        class="block w-full rounded border-2 border-sky-600 px-1 py-2 text-center font-semibold transition-colors hover:bg-sky-600 hover:text-white">Inicia
        Sesión</button>
    </form>
    <div>
      <p class="text-center">¿Todavia no tienes cuenta?</p>
      <a href="{{ route('auth.signup') }}"
        class="block text-center font-semibold text-sky-600 hover:underline">Crea una
      </a>
    </div>
  </section>
@endsection
