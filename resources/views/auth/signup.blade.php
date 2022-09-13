@extends('layouts/app')

@section('title', 'Registro')

@section('content')
  <section class="mx-auto mt-8 w-full max-w-3xl space-y-8 rounded-md p-12 shadow-lg">
    <h1 class="rounded-sm bg-sky-600 py-2 text-center text-3xl font-bold text-white">Registrate</h1>
    <form method="POST" action="{{ route('auth.store') }}" class="space-y-8 text-lg">
      @csrf
      <section class="grid grid-cols-1 gap-5 sm:grid-cols-2">
        <div class="space-y-1">
          <label class="font-semibold" for="last_name">Apellidos</label>
          <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600" placeholder=""
            id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
          @error('last_name')
            <span class="font-semibold text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <div class="space-y-1">
          <label class="font-semibold" for="first_name">Nombres</label>
          <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600" placeholder=""
            id="first_name" name="first_name" type="text" value="{{ old('first_name') }}">
          @error('first_name')
            <span class="font-semibold text-red-500">{{ $message }}</span>
          @enderror
        </div>
      </section>
      <div class="space-y-1">
        <label class="font-semibold" for="email">Correo Electronico</label>
        <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600"
          placeholder="ejemplo@gmail.com" id="email" name="email" type="email"
          value="{{ old('email') }}">
        @error('email')
          <span class="font-semibold text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <section class="grid grid-cols-1 items-center gap-5 sm:grid-cols-2">
        <div class="space-y-1">
          <label class="font-semibold" for="document_type">Tipo de documento</label>
          <select class="w-full rounded-sm border-2 border-sky-400 p-[0.67rem] outline-sky-700"
            name="document_type" id="document_type">
            <option value="" disabled selected>Selecciona una</option>
            <option value="cc">Cedula de Ciudadania</option>
            <option value="ti">Tarjeta de indentidad</option>
          </select>
        </div>
        <div class="space-y-1">
          <label class="font-semibold" for="document_number">Numero de documento</label>
          <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600" placeholder=""
            id="document_number" name="document_number" type="text"
            value="{{ old('document_number') }}">
          @error('document_number')
            <span class="font-semibold text-red-500">{{ $message }}</span>
          @enderror
        </div>
      </section>
      <section class="grid grid-cols-1 items-start gap-5 sm:grid-cols-2">
        <div class="space-y-1">
          <label class="font-semibold" for="password">Contraseña</label>
          <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600"
            placeholder="*******" id="password" name="password" type="password"
            value="{{ old('password') }}">
          @error('password')
            <span class="font-semibold text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <div class="space-y-1">
          <label class="font-semibold" for="password_confirmation">Confirmar
            contraseña</label>
          <input class="w-full rounded-sm border-2 border-sky-400 p-2 outline-sky-600"
            placeholder="*******" id="password_confirmation" name="password_confirmation"
            type="password">
          @error('password_confirmation')
            <span class="font-semibold text-red-500">{{ $message }}</span>
          @enderror
        </div>
      </section>
      <button type="submit"
        class="block w-full rounded border-2 border-sky-600 px-1 py-2 text-center font-semibold transition-colors hover:bg-sky-600 hover:text-white">Registrate</button>
    </form>
    <div>
      <p class="text-center">¿Ya tienes una cuenta?</p>
      <a href="{{ route('auth.login') }}"
        class="block text-center font-semibold text-sky-600 hover:underline">Inicia
        Sesión</a>
    </div>
  </section>
@endsection
