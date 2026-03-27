<section class="mt-32" id="productos">
    <div class="text-center">
        <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-gray-900 dark:text-white">Distribuidor Máster en Soluciones Integrales de Seguridad</h2>
        <p class="mt-4 text-center text-sm/7 text-gray-600 dark:text-gray-100 max-w-md mx-auto">En MIe, somos el almacén estratégico que tu empresa de integración necesita. No competimos contigo en la instalación; nos dedicamos exclusivamente a suministrarte tecnología de punta con stock inmediato y respaldo técnico de fábrica. Tú integras, nosotros te equipamos.</p>
    </div>
    <div class="flex flex-wrap items-start justify-center gap-x-6 gap-y-24 mt-10 px-6 max-w-6xl mx-auto pt-20">
        @foreach($page->features as $feature)
        <div class="hover:-translate-y-0.5 transition duration-300 max-w-80 w-full relative">
            <img src="{{ $feature['image'] }}" alt="{{ $feature['title'] }}" class="absolute -top-[72px] left-1/2 -translate-x-1/2 h-36 object-contain z-10">
            <div class="glass rounded-xl px-6 pt-20 pb-6 space-y-2">
            <h3 class="text-base font-medium text-gray-900 dark:text-white">{{ $feature['title'] }}</h3>
            <p class="text-gray-600 dark:text-gray-100 line-clamp-3 pb-1">{{ $feature['description'] }}</p>
            <a href="/productos/{{ $feature['link'] }}" class="inline-block mt-2 text-sm font-medium text-gray-500 dark:text-white/70 hover:text-gray-900 dark:hover:text-white transition">Ver más →</a>
            </div>
        </div>
        @endforeach
    </div>
</section>