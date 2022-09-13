@extends('layouts/app')

@section('title', 'Cita')

@section('content')
  <main class="mt-4 px-4">
    <section class="mx-auto w-full max-w-lg rounded bg-white p-8 shadow-md">
      <div>
        <h2 class="mb-4 rounded bg-sky-500 p-2 text-center text-3xl font-bold text-white">Crear nuevo
          horario
        </h2>
        <form action="{{ route('admin.schedule.store') }}" method="POST"
          class="flex flex-col justify-center gap-4 text-xl">
          @csrf
          <label for="appointment_date">Fecha y hora</label>
          <input class="border-2 p-2" name="appointment_date" id="appointment_date" type="datetime-local"
            required>
          <div class="flex justify-center">
            <button
              class="max-w-fit rounded-md bg-sky-500 py-2 px-6 text-xl text-white transition-all hover:opacity-75">Crear
              Horario</button>
          </div>
        </form>
      </div>

    </section>
    <div class="mt-8 flex justify-center">
      <a class="max-w-fit rounded-md bg-sky-500 py-2 px-6 text-xl text-white transition-all hover:opacity-75"
        href="{{ route('admin.index') }}">Volver</a>
    </div>

  </main>
@endsection
