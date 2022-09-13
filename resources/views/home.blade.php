@extends('layouts/app')

@section('title', 'Inicio')

@section('content')
  <main class="mt-4 min-h-[85vh]">
    <h2 class="bg-sky-500 p-4 text-center text-3xl font-bold text-white">Nuestros Servicios</h2>
    <section class="mx-auto grid max-w-screen-xl grid-cols-3 justify-items-center gap-4 p-4">
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Consulta general</h3>
        <img src={{ asset('assets/consulta.jpeg') }} alt="icono 1">
        <p>Restauración, limpieza dental profunda, aclaramiento de los dientes</p>
      </article>
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Ortodoncia</h3>
        <img src={{ asset('assets/ortodoncia.png') }} alt="icono 1">
        <p>Alineación de los dientes, corrigiendo la posición dental</p>
      </article>
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Periodoncia</h3>
        <img src={{ asset('assets/periodoncia.jpeg') }} alt="icono 1">
        <p>Prevención y tratamiento de los tejidos del soporte en el diente (hueso, encia)</p>
      </article>
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Rehabilitación</h3>
        <img src={{ asset('assets/rehabilitacion.jpeg') }} alt="icono 1">
        <p>Devolver las formas y estructuras dentales perdidas, reestableciendo la función
          masticatoria</p>
      </article>
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Endodoncia</h3>
        <img src={{ asset('assets/endoncia.jpeg') }} alt="icono 1">
        <p>Trata enfermedades de la pula de los dientes generada por caries o traumatismos</p>
      </article>
      <article class="max-w-xs p-4 shadow-md transition-transform hover:scale-110">
        <h3 class="mb-1 text-center text-xl font-bold">Cirujia Maxilofacial</h3>
        <img src={{ asset('assets/cirugia.jpeg') }} alt="icono 1">
        <p>Se trata de tratar enfermedades de la pula de los dientes generada por carie o traumatismo
        </p>
      </article>
    </section>
  </main>
  <footer class="h-32 shadow-md">
    <h2 class="text-center text-xl font-bold">Siguenos en nuestras redes sociales</h2>
    <section class="mt-4 flex justify-center gap-4">
      <a class="h-8 w-8" href="">
        <img src={{ asset('assets/facebook.svg') }} class="h-8 w-8" alt="">
      </a>
      <a class="h-8 w-8" href="">
        <img src={{ asset('assets/instagram.svg') }} class="h-8 w-8" alt="">
      </a>
      <a class="h-8 w-8" href="">
        <img src={{ asset('assets/whatsapp.svg') }} class="h-8 w-8" alt="">
      </a>
      <a class="h-8 w-8" href="">
        <img src={{ asset('assets/gmail.svg') }} class="h-8 w-8" alt="">
      </a>
    </section>
  </footer>
@endsection
