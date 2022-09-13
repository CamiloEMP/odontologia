@extends('layouts/app')

@section('title', 'Cita')

@section('content')
  <main class="mt-8 px-4">
    <form class="mx-auto flex w-full max-w-md flex-col space-y-4 rounded-md p-4 shadow-xl"
      method="POST" action="{{ route('appointment.store') }}">
      @csrf
      <h2 class="rounded-sm bg-sky-600 py-2 text-center text-2xl font-semibold text-white">Solicitar
        Cita
      </h2>
      <div class="flex flex-col gap-1 text-lg">
        <label for="title">
          Motivo de la consulta:
        </label>
        <input required class="rounded border-2 px-2 py-1" id="title" placeholder="Me duele la muela"
          name="title" type="text" value="{{ old('title') }}">
        @error('title')
          <span class="font-semibold text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="flex flex-col gap-1 text-lg">
        <h2>Horarios Disponibles</h2>
        <select class="rounded border-2 p-2" name="date" id="date" required>
          <option value="" disabled selected></option>
          @foreach ($schedules as $schedule)
            <option value="{{ $schedule->appointment_date }}">
              {{ substr($schedule->appointment_date, 0, -3) }}
          @endforeach
        </select>
      </div>
      <label for="body" class="text-lg">
        Información adicional (opcional)
        <textarea value="{{ old('body') }} "
          class="h-32 max-h-52 min-h-[5rem] w-full resize-y border-2 p-2 text-lg" placeholder=""
          name="body" id="body"></textarea>
        @error('body')
          <span class="font-semibold text-red-500">{{ $message }}</span>
        @enderror
      </label>

      <button
        class="rounded border-2 border-sky-600 py-2 transition-colors hover:bg-sky-600 hover:text-white"
        type="submit">Enviar</button>
    </form>
  </main>
@endsection
