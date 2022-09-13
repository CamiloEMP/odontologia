@extends('layouts/app')

@section('title', 'Panel Control')

@section('content')
  <main class="mt-16 px-4">
    <section class="mx-auto flex w-full max-w-xl flex-col gap-2 p-16 shadow-xl">
      <h1 class="mb-4 rounded-sm bg-sky-600 py-2 text-center text-2xl font-bold text-white">Horarios
        sin
        Agendar
      </h1>
      @if (count($schedules) != 0)
        <section class="grid grid-cols-2 items-center">
          <span class="text-xl font-bold">Fecha Cita</span>
          <span class="text-xl font-bold">Modificar</span>
        </section>
      @endif
      @forelse ($schedules as $item)
        <section class="grid grid-cols-2 items-center text-lg">
          <span>{{ substr($item->appointment_date, 0, -3) }}</span>
          <div class="flex gap-2">
            <a href="{{ route('admin.schedule.edit', $item->id) }}"
              class="rounded bg-green-500 py-1 px-2 text-white">Modificar</a>
            <form action="{{ route('admin.schedule.destroy', $item->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="rounded bg-red-500 py-1 px-2 text-white">Eliminar</button>
            </form>
          </div>
        </section>
      @empty
        <p class="text-center text-xl font-bold">No tienes horarios creados</p>
        <a href="{{ route('admin.schedule.create') }}"
          class="text-center text-xl font-bold text-sky-500 underline">Crear nuevos horarios</a>
      @endforelse
    </section>
  </main>
@endsection
