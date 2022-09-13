@extends('layouts/app')

@section('title', 'Citas')

@section('content')
  @if (session('status'))
    <div
      class="font-body fixed bottom-0 left-0 w-full bg-green-600 p-4 text-xl font-semibold text-white">
      {{ session('status') }}
    </div>
  @endif
  @if (session('appointment_delete'))
    <div class="fixed bottom-0 left-0 w-full bg-green-600 p-4 text-xl font-semibold text-white">
      {{ session('appointment_delete') }}
    </div>
  @endif
  <main class="mt-16 px-4">
    <section class="mx-auto max-w-screen-xl rounded-sm p-4 shadow-xl">
      <h2 class="mb-6 text-center text-2xl font-semibold text-sky-600">Listado de Citas</h2>
      <div
        class="mb-4 grid grid-cols-4 justify-items-center gap-2 rounded-sm bg-sky-600 px-2 py-1 text-lg font-semibold text-white">
        <span>Motivo Cita</span>
        <span>Fecha</span>
        <span>Detalles</span>
      </div>
      @if (count($appointments) == 0)
        <p class="text-center text-lg font-semibold">No tienes citas pendientes</p>
        <a class="mx-auto block text-center text-lg font-semibold text-sky-600 underline"
          href={{ route('appointment.create') }}>Agendar cita</a>
      @else
        @foreach ($appointments as $appointment)
          <div
            class="grid grid-cols-4 items-center justify-items-center px-2 py-2 text-lg font-semibold">
            <span>{{ $appointment->title }}</span>
            <span>{{ substr($appointment->date, 0, -3) }}</span>
            <a href="{{ route('appointment.showId', $appointment->id) }}" class="hover:underline">Ver
              mas</a>
            <form action="{{ route('appointment.destroy', $appointment->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="rounded bg-red-500 p-1 text-white">Cancelar cita</button>
            </form>
          </div>
        @endforeach
      @endif

    </section>
  </main>

@endsection
