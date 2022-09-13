@extends('layouts/app')

@section('title', 'Panel Control')

@section('content')
  <main class="mt-16 px-4">
    <section class="mx-auto flex w-full max-w-md flex-col gap-8 p-16 shadow-xl">
      <h1 class="rounded-sm bg-sky-600 py-2 text-center text-2xl font-bold text-white">Panel de control
      </h1>
      <div class="flex flex-col gap-4 text-xl">
        <a class="rounded border-2 border-sky-600 py-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
          href="{{ route('admin.appointment.index') }}">Listado de citas</a>
        <a class="rounded border-2 border-sky-600 py-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
          href="{{ route('admin.schedule.index') }}">Horarios sin Paciente</a>
        <a class="rounded border-2 border-sky-600 py-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
          href="{{ route('admin.schedule.create') }}">Crear nuevos horarios</a>
      </div>
    </section>
  </main>
@endsection
