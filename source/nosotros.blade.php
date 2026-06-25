@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

<main id="main-content" class="px-4">
    <section class="mt-32 relative">
        @include('_partials.coverabout')
        @include('_partials.mission')
        @include('_partials.why')
        
            <!-- Historia -->
            <h3 class="text-4xl font-semibold text-gray-900 dark:text-white mb-4 text-center mt-40">Nuestra Historia</h3>
            <p class="text-center text-gray-500 dark:text-gray-400 text-sm mb-16 tracking-widest uppercase">Más de 30 años construyendo confianza</p>

            <div class="relative max-w-2xl mx-auto">
                <!-- Vertical line -->
                <div class="absolute left-6 top-0 bottom-0 w-px bg-black/10 dark:bg-white/20"></div>

                <!-- 1994 -->
                <div class="relative flex items-center gap-8 mb-12">
                    <div class="flex-shrink-0 w-12 flex justify-center">
                        <div class="w-3 h-3 rounded-full bg-white ring-4 ring-gray-900/20 dark:ring-white/20 z-10"></div>
                    </div>
                    <div class="glass rounded-2xl p-6 flex-1">
                        <span class="text-xs font-semibold tracking-widest text-gray-500 dark:text-gray-400 uppercase">1994</span>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-lg mt-1 mb-3">Fundación — SIMMS S.A de C.V</h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Inicio de operaciones como empresa dedicada a la comercialización de componentes electrónicos al mayoreo.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 1999 -->
                <div class="relative flex items-center gap-8 mb-12">
                    <div class="flex-shrink-0 w-12 flex justify-center">
                        <div class="w-3 h-3 rounded-full bg-white ring-4 ring-gray-900/20 dark:ring-white/20 z-10"></div>
                    </div>
                    <div class="glass rounded-2xl p-6 flex-1">
                        <span class="text-xs font-semibold tracking-widest text-gray-500 dark:text-gray-400 uppercase">1999</span>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-lg mt-1 mb-3">Expansión — Power Graphics Computer S.A de C.V</h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Diversificación del mercado para brindar un servicio más cercano al cliente final.
                            </li>
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Enfoque en solucionar problemas de IT para el hogar y pequeñas empresas.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2014 -->
                <div class="relative flex items-center gap-8 mb-12">
                    <div class="flex-shrink-0 w-12 flex justify-center">
                        <div class="w-3 h-3 rounded-full bg-white ring-4 ring-gray-900/20 dark:ring-white/20 z-10"></div>
                    </div>
                    <div class="glass rounded-2xl p-6 flex-1">
                        <span class="text-xs font-semibold tracking-widest text-gray-500 dark:text-gray-400 uppercase">2014</span>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-lg mt-1 mb-3">Especialización — Mayoristas de Distribución Electrónica S de R.L de C.V</h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Respuesta a la demanda del mercado en CCTV y videovigilancia.
                            </li>
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Integración de soluciones de Cableado Estructurado, Voz y Datos, y A/C.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-shrink-0 w-12 flex justify-center">
                        <div class="w-3 h-3 rounded-full bg-white ring-4 ring-gray-900/20 dark:ring-white/20 z-10"></div>
                    </div>
                    <div class="glass rounded-2xl p-6 flex-1">
                        <span class="text-xs font-semibold tracking-widest text-gray-500 dark:text-gray-400 uppercase">2017</span>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-lg mt-1 mb-3">Consolidación estratégica</h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Inicio de alianzas estratégicas con proveedores clave del sector.
                            </li>
                            <li class="flex gap-2 text-gray-500 dark:text-gray-300 text-sm/6">
                                <span class="mt-2 w-1.5 h-1.5 rounded-full bg-gray-900/20 dark:bg-white/50 flex-shrink-0"></span>
                                Garantía de costos competitivos y calidad en el servicio post venta.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('_partials.footer')

@endsection

