{{-- empieza el head --}}
@include('layouts.head')
{{-- termina el head --}}

<body>

{{-- empieza el navbar --}}
    @include('layouts.navbar')
{{-- termina el navbar --}}

<main>

{{-- empieza el content --}}
  @include('sesion.perfil.perfil')
{{-- termina el content --}}

{{-- empieza el footer --}}
  {{-- @include('layouts.footer') --}}
{{-- termina el footer --}}

</main>