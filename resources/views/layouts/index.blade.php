<!doctype html>
<html lang="en">

{{-- empieza el head --}}
    @include('layouts.head')
<title>@yield('title')Carousel Template</title>
<title>@yield('title')</title>

{{-- termina el head --}}

<body>

{{-- empieza el navbar --}}
    @include('layouts.navbar')
{{-- termina el navbar --}}

<main>

{{-- empieza el content --}}
  @include('layouts.content')
{{-- empieza el content --}}

{{-- empieza el footer --}}
  @include('layouts.footer')
{{-- empieza el footer --}}

</main>
  
</body>
</html>