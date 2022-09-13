@extends('layouts/app')

@section('title', 'Cita')

@section('content')
  @if (session('appointemnt_status'))
    <div class="fixed bottom-0 left-0 w-full bg-green-600 p-4 text-xl font-semibold text-white">
      {{ session('appointemnt_status') }}
    </div>
  @endif
  <main class="mt-4 px-4">
    <section class="mx-auto max-w-screen-lg rounded-sm p-4 shadow-xl">
      <h2 class="mb-6 bg-sky-600 p-2 text-center text-2xl font-semibold text-white">Listado de citas
      </h2>
      <div
        class="mb-4 grid grid-cols-3 justify-items-center gap-2 rounded-sm bg-sky-600 px-2 py-1 text-lg font-semibold text-white">
        <span>Nombre del Paciente</span>
        <span>Fecha Cita</span>
        <span>Detalle Cita</span>
      </div>
      @if (count($appointments) == 0)
        <p class="text-center text-lg font-semibold">No hay nuevas citas</p>
      @else
        @foreach ($appointments as $appointment)
          <div
            class="grid grid-cols-3 items-center justify-items-center px-2 py-2 text-lg font-semibold">
            <span>{{ $appointment->userInfo->last_name }} {{ $appointment->userInfo->first_name }}
            </span>
            <span>{{ substr($appointment->date, 0, -3) }}</span>
            <a href="{{ route('admin.appointment.show', $appointment->id) }}" class="hover:underline">
              Ver mas
            </a>
          </div>
        @endforeach
      @endif
    </section>
    <div class="mt-8 flex justify-center">
      <a class="max-w-fit rounded-md bg-sky-600 py-2 px-6 text-xl text-white transition-all hover:opacity-75"
        href="{{ route('admin.index') }}">Volver</a>
    </div>
  </main>
@endsection
