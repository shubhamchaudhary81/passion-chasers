@extends('layouts.app')

@section('title', 'Passion Chasers')

@section('hero')
  @include('home.hero')
@endsection

@section('content')
  @include('home.about')
  @include('home.why-us')
  @include('home.services')
  @include('home.training')

  {{-- Career section uses $vacancies --}}
  <section id="career" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-heading font-bold text-secondary uppercase">Career</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @if($vacancies->isNotEmpty())
          @foreach($vacancies as $vac)
            <div class="bg-white shadow rounded p-6 hover:-translate-y-1 transition-transform cursor-pointer"
                 onclick="window.open('{{ route('vacancy.show', $vac->id) }}','_blank')">
              @if($vac->type && $vac->type->img)
                <img src="{{ asset($vac->type->img) }}" alt="{{ $vac->type->name }}" class="w-full h-40 object-contain mb-4" />
              @endif

              <h3 class="text-lg font-semibold text-gray-800 mb-2">
                <a href="{{ route('vacancy.show', $vac->id) }}" target="_blank">
                  {{ $vac->name }}
                </a>
              </h3>

              <p class="text-sm text-gray-600 mb-1"><strong>Position:</strong> {{ $vac->positions }}</p>
              <p class="text-sm text-gray-600 mb-1"><strong>Slots:</strong> {{ $vac->slots }}</p>

              <div class="flex items-center justify-between text-xs text-gray-400 mt-4">
                <span>
                  <i class="bx bx-calendar"></i>
                  {{ $vac->expires_at ? $vac->expires_at->format('M j, Y') : 'N/A' }}
                </span>
                <span class="text-primary font-medium">View</span>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-span-full text-center text-secondary font-semibold py-12">
            Sorry, there are no vacancies for now.
          </div>
        @endif
      </div>
    </div>
  </section>

  @include('home.contact')
@endsection
