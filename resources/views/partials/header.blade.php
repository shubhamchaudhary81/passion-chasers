<header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    <a href="{{ route('home') }}" class="flex items-center gap-3">
      <img src="{{ asset('assets/img/logo-name.png') }}" alt="Logo" class="h-12">
      <span class="hidden md:block font-heading text-primary font-extrabold tracking-wide">
        Passion Chasers
      </span>
    </a>

    <nav class="hidden lg:block">
      <ul class="flex items-center gap-8 text-sm font-semibold">
        <li><a href="#home" class="hover:text-primary">Home</a></li>
        <li><a href="#about" class="hover:text-primary">About</a></li>
        <li><a href="#services" class="hover:text-primary">Services</a></li>
        <li><a href="#training" class="hover:text-primary">Training</a></li>
        <li><a href="#career" class="hover:text-primary">Career</a></li>
        <li><a href="#contact" class="hover:text-primary">Contact</a></li>
      </ul>
    </nav>

    <button id="mobileToggle" class="lg:hidden text-primary text-2xl">
      <i class='bx bx-menu'></i>
    </button>
  </div>

  <div id="mobileMenu" class="hidden lg:hidden bg-white border-t">
    <ul class="flex flex-col p-4 gap-4 text-sm font-semibold">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#training">Training</a></li>
      <li><a href="#career">Career</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>

  @push('scripts')
  <script>
    document.getElementById('mobileToggle')?.addEventListener('click', () => {
      document.getElementById('mobileMenu')?.classList.toggle('hidden');
    });
  </script>
  @endpush
</header>
