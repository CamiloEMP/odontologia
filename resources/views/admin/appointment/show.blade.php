@extends('layouts/app')

@section('title', 'Cita')

@section('content')
  <main class="mx-auto mt-16 max-w-screen-xl space-y-4 px-4">
    <h1 class="bg-sky-600 py-2 text-center text-3xl font-bold text-white">Detalles de la cita</h1>
    <section>
      <div class="text-lg">
        <span class="font-bold">Nombre del paciente:</span>
        <span>{{ $appointment->userInfo->last_name }} {{ $appointment->userInfo->first_name }}</span>
      </div>
      <div class="text-lg">
        <span class="font-bold">Tipo de identificación:</span>
        <span class="uppercase">{{ $appointment->userInfo->document_type }} </span>
      </div>
      <div class="text-lg">
        <span class="font-bold">Numero de indentificación:</span>
        <span>{{ $appointment->userInfo->document_number }} </span>
      </div>
      <div class="text-lg">
        <span class="font-bold">Correo electronico:</span>
        <span>{{ $appointment->userInfo->email }} </span>
      </div>
    </section>
    <div>
      <h2 class="text-2xl font-bold">Motivo de la consulta</h2>
      <p class="text-lg">{{ $appointment->title }}</p>
    </div>
    @if ($appointment->body)
      <div>
        <h2 class="text-2xl font-bold">Descripción adicional</h2>
        <p class="text-lg">{{ $appointment->body }}</p>
      </div>
    @endif
    @if ($appointment->observations)
      <div>
        <h2 class="text-2xl font-bold">Motivo del rechazo</h2>
        <p class="text-lg">{{ $appointment->observations }}</p>
      </div>
    @endif
    <div class="flex justify-center">
      <a class="max-w-fit rounded-md bg-sky-600 py-2 px-6 text-xl text-white transition-all hover:opacity-75"
        href="{{ route('admin.appointment.index') }}">Volver</a>
    </div>
  </main>

@endsection
