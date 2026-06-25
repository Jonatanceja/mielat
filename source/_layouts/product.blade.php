@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

<main id="main-content" class="px-4">
<section class="flex flex-col items-center">
    <!-- Swiper Slider -->
    <div class="w-full max-w-3xl">
        <div class="">
            <div class="h-96 flex items-center justify-center">
                <img src="/assets/images/{{ $page->photo }}" alt="{{ $page->headline }}" class="max-h-full max-w-full object-contain mx-auto">
            </div>
        </div>    
    </div>

    <h1 class="text-center text-4xl/13 md:text-6xl/19 font-semibold tracking-tight max-w-4xl">{{ $page->headline }}</h1>
    <p class="text-center text-gray-600 dark:text-gray-100 text-base/7 max-w-lg mt-6">{{ $page->sub }}</p>
</section>
<section class="mt-14">
    <p class="py-6 mt-14 text-center">Calidad Garantizada por las Mejores Marcas del Mercado</p>
    <div class="flex flex-wrap justify-center gap-10 max-w-4xl w-full mx-auto py-4" id="logo-container">
        @foreach ($page->brands as $item)
            <img src="{{ $item['src'] }}" alt="{{ $item['alt'] }}" class="h-10 w-auto max-w-xs hidden dark:block" />
            <img src="{{ str_replace('/SVG/', '/SVG/dark/', $item['src']) }}" alt="{{ $item['alt'] }}" class="h-10 w-auto max-w-xs block dark:hidden" />
        @endforeach
    </div>
</section>
<section class="mt-32">
    <div class="text-center">
        <h2 class="text-3xl font-semibold max-w-xl mx-auto mt-4 text-gray-900 dark:text-white">Nuestras soluciones para Sistemas de {{ $page->title }}</h2>
        <div class="mt-4 text-center text-base/7 text-gray-600 dark:text-gray-100 max-w-xl mx-auto">
            @yield('content')
        </div>
    </div>
    <div class="flex flex-wrap items-start justify-center gap-x-6 gap-y-24 mt-10 px-6 pt-20">
        @foreach ($page->categories as $category)
            <div class="hover:-translate-y-0.5 transition duration-300 max-w-80 w-full relative">
                <img src="/assets/images{{ $category['image'] }}" alt="{{ $category['title'] }}" class="absolute -top-[72px] inset-x-0 mx-auto h-36 object-contain z-10">
                <div class="glass rounded-xl px-6 pt-20 pb-6 space-y-2">
                    <h3 class="text-base font-medium text-gray-900 dark:text-white">{{ $category['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-100 line-clamp-3 pb-1">{{ $category['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div data-gsap="cta" class="max-w-5xl px-4 mt-40 mx-auto rounded-xl glass overflow-hidden">
    <div class="flex flex-col md:flex-row items-center">
        <div class="flex-1 px-8 py-16 text-center md:text-left">
            <h2 class="text-2xl md:text-4xl font-medium mt-2">Todo lo que su proyecto de {{ $page->title }} requiere para una instalación exitosa.</h2>
            <p class="mt-4 text-sm/7 max-w-md">Contáctanos hoy y descubre cómo podemos ayudarte a encontrar las soluciones de seguridad perfectas para tus necesidades.</p>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mt-8">
                <button class="btn glass flex items-center gap-2">
                    Solicitar Cotización
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right size-4" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
                <button class="btn bg-white/10 hover:bg-white/20 flex items-center gap-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone size-4" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    Contactar Asesor
                </button>
            </div>
        </div>
        <div class="hidden md:block w-80">
            <img src="/assets/images/{{ $page->photo }}" alt="{{ $page->title }}" class="w-full h-full">
        </div>
    </div>
</div>
</main>
@include('_partials.footer')

@endsection