<section class="mt-32">
    <div class="text-center">
        <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">Soluciones Integrales de Seguridad</h2>
        <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Tecnología profesional para cada necesidad de protección. Desde la prevención hasta la respuesta inmediata.</p>
    </div>
    <div class="flex flex-wrap items-center justify-center gap-6 mt-10 px-6 max-w-6xl mx-auto">
        @foreach($page->features as $feature)
        <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
            <x-icon :name="$feature['icon']" />
            <h3 class="text-base font-medium text-white">{{ $feature['title'] }}</h3>
            <p class="text-gray-100 line-clamp-3 pb-1">{{ $feature['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>