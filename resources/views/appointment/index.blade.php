@extends('layouts/app')

@section('title', 'Agendar Cita')

@section('content')
  <main class="mt-16 px-4">
    <section class="mx-auto flex w-full max-w-md flex-col gap-8 p-16 shadow-xl">
      <h1 class="rounded-sm bg-sky-600 py-2 text-center text-2xl font-bold text-white">Portal de citas
      </h1>
      <div class="flex flex-col gap-4 text-lg">
        <a class="rounded border-2 border-sky-600 py-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
          href="{{ route('appointment.create') }}">Solicitar nueva cita</a>
        <a class="rounded border-2 border-sky-600 py-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
          href="{{ route('appointment.show') }}">Ver mi listado de citas</a>
      </div>
    </section>
  </main>
@endsection
