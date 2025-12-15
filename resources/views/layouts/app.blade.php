<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Passion Chasers')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Jost:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  {{-- Tailwind CSS compiled by Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Boxicons (for icons if you want) --}}
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  @stack('head')
</head>
<body class="font-sans text-muted bg-gray-50 antialiased">

  @include('partials.header')

  <div class="pt-24">
    @yield('hero')
  </div>

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  {{-- Particles.js (for hero background) --}}
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  @stack('scripts')
</body>
</html>
