{{-- empieza el head --}}
@include('layouts.head')
{{-- termina el head --}}

<body>

{{-- empieza el navbar --}}
    @include('layouts.navbar')
{{-- termina el navbar --}}

<main>

{{-- empieza el content --}}
  @include('ventas.ventas')
{{-- empieza el content --}}

{{-- empieza el footer --}}
  @include('layouts.footer')
{{-- empieza el footer --}}

</main>