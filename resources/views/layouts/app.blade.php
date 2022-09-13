<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpeg" href={{ asset('assets/logo.jpeg') }} />
  @vite('resources/css/app.css')
  <title>Molares | @yield('title')</title>
</head>

<body class="font-body">
  <nav class="flex items-center justify-between gap-8 px-8 py-2 shadow-xl">
    <img class="w-20" src={{ asset('assets/logo.png') }} alt="">
    <ul class="flex items-center gap-6 text-lg font-semibold">
      <li>
        <a class="{{ request()->is('/') ? 'text-sky-600' : '' }} transition-colors hover:text-sky-600"
          href="{{ route('home') }}">Inicio</a>
      </li>
      @auth
        @hasrole('Patient')
          <li>
            <a class="{{ request()->routeIs('appointment.*') ? 'text-sky-600' : '' }} transition-colors hover:text-sky-600"
              href="{{ route('appointment.index') }}">Citas</a>
          </li>
        @endhasrole
        @hasrole('Admin')
          <li>
            <a class="{{ request()->routeIs('admin.*') ? 'text-sky-600' : '' }} transition-colors hover:text-sky-600"
              href="{{ route('admin.index') }}">Panel de control</a>
          </li>
        @endhasrole
        <li>
          <a class="inline-block w-32 rounded-sm border-2 border-sky-500 p-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
            href="{{ route('auth.logout') }}">Cerrar Sesión</a>
        </li>
      @endauth
      @guest
        <li>
          <a class="inline-block w-32 rounded-sm border-2 border-sky-500 p-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
            href="{{ route('auth.login') }}">Inicia Sesión</a>
        </li>
        <li>
          <a class="inline-block w-32 rounded-sm border-2 border-sky-500 p-1 text-center transition-colors hover:bg-sky-600 hover:text-white"
            href="{{ route('auth.signup') }}">Registrate</a>
        </li>
      @endguest
    </ul>
  </nav>
  @yield('content')
  @if (session('schedule_status'))
    <div class="fixed bottom-0 left-0 w-full bg-green-600 p-4 text-xl font-semibold text-white">
      {{ session('schedule_status') }}
    </div>
  @endif
</body>

</html>
