@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

<main class="px-4">
<section class="flex flex-col items-center">
    <!-- Swiper Slider -->
    <div class="w-full max-w-3xl">
        <div class="">
            <div class="h-96 flex items-center justify-center">
                <img src="/assets/images/videovigilancia.png" alt="Videovigilancia" class="w-full h-full object-contain">
            </div>
        </div>    
    </div>

    <h1 class="text-center text-4xl/13 md:text-6xl/19 font-semibold tracking-tight max-w-4xl">Soluciones Avanzadas de Videovigilancia IP</h1>
    <p class="text-center text-gray-100 text-base/7 max-w-lg mt-6">Desde cámaras térmicas hasta reconocimiento facial, nuestras soluciones garantizan evidencia nítida y una gestión eficiente de la seguridad perimetral para empresas y comercios.</p>
</section>
<section class="mt-14">
    <p class="py-6 mt-14 text-center">Calidad Garantizada por las Mejores Marcas del Mercado</p>
    <div class="flex flex-wrap justify-between max-sm:justify-center gap-10 max-w-4xl w-full mx-auto py-4" id="logo-container">
        @foreach ($page->logos as $item)
            <img src="{{ $item['src'] }}" alt="{{ $item['alt'] }}" class="h-7 w-auto max-w-xs" />
        @endforeach
    </div>
</section>
<section class="mt-32">
    <div class="text-center">
        <h2 class="text-3xl font-semibold max-w-xl mx-auto mt-4 text-white">Nuestras soluciones para Sistemas de Videovigilancia</h2>
        <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-xl mx-auto">Somos su aliado estratégico en la distribución de tecnología de punta. Ofrecemos un catálogo integral de cámaras, NVRs y accesorios con stock inmediato, garantizando que su proyecto de videovigilancia cuente con el respaldo de las marcas líderes y asesoría técnica especializada en cada equipo.</p>
    </div>
    <div class="flex flex-wrap items-center justify-center gap-6 mt-10 px-6">
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Almacenamiento en la nube</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Software</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Almacenamiento IP</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Videovigilancia Inteligente</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Cámaras IP</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">NVR's</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Kits CCTV HD</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Móviles</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Cámaras CCTV HD</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">DVR's HD</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Video HDMI</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Servidores y Software</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Monitores</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon name="video" />
            <h3 class="text-base font-medium text-white">Accesorios</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officia.</p>
        </div>
    </div>
</section>
<div class="flex flex-col max-w-5xl px-4 mt-40 mx-auto items-center justify-center text-center py-16 rounded-xl glass">
    <h2 class="text-2xl md:text-4xl font-medium mt-2">Todo lo que su de proyecto de videovigilancia requiere para una integración exitosa.</h2>
    <p class="mt-4 text-sm/7 max-w-md">Contáctanos hoy y descubre cómo podemos ayudarte a encontrar las soluciones de seguridad perfectas para tus necesidades.</p>
    <div class="flex flex-col md:flex-row items-center gap-4 mt-8">
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
</main>
@include('_partials.footer')

@endsection