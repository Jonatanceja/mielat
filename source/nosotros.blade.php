@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

<main class="px-4">
    <section class="mt-32 relative">
        @include('_partials.coverabout')
        @include('_partials.mission')
        @include('_partials.why')
        
            <!-- Historia -->
            <h3 class="text-4xl font-semibold text-white mb-6 text-center mt-40">Nuestra Historia</h3>
            <div class="glass rounded-2xl p-8 md:p-12 mb-6">
                <div class="flex items-center gap-4 mb-2">
                    <svg class="h-6 -mt-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path> <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle> </g></svg>
                    <h4 class="font-semibold text-white mb-2">1994</h4>
                </div>
                    <div>
                        <p class="text-gray-100 text-base/7">Inicio de operaciones bajo la razón social SIMMS S. A de C.V Empresa dedicada a la comercialización de componentes Electrónicos al mayoreo.</p>
                    </div>
            </div>
            <div class="glass rounded-2xl p-8 md:p-12 mb-6">
                <div class="flex items-center gap-4 mb-2">
                    <svg class="h-6 -mt-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path> <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle> </g></svg>
                    <h4 class="font-semibold text-white mb-2">1999</h4>
                </div>
                    <div>
                        <p class="text-gray-100 text-base/7">Con el propósito de diversificar su mercado y brindar un servicio más cercano a sus clientes se constituyo Power Graphics computer S. A de C.V enfocada a solucionar los problemas IT del hogar.</p>
                    </div>
            </div>
            <div class="glass rounded-2xl p-8 md:p-12 mb-6">
                <div class="flex items-center gap-4 mb-2">
                    <svg class="h-6 -mt-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path> <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle> </g></svg>
                    <h4 class="font-semibold text-white mb-2">2014</h4>
                </div>
                    <div>
                        <p class="text-gray-100 text-base/7">Para atención a los requerimientos del mercado en el área de CCTV, Cableado Estructurado, Voz y Datos y A/C nace Mayoristas de integración electrónica S de R.L de C.V</p>
                    </div>
            </div>
            <div class="glass rounded-2xl p-8 md:p-12 mb-6">
                <div class="flex items-center gap-4 mb-2">
                    <svg class="h-6 -mt-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path> <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle> </g></svg>
                    <h4 class="font-semibold text-white mb-2">2017</h4>
                </div>
                    <div>
                        <p class="text-gray-100 text-base/7">Inicia proceso para fomentar alianzas estrategias con nuestros proveedores a fin de garantizar costos competitivos y calidad en el servicio post venta.</p>
                    </div>
            </div>
        </div>
    </section>
</main>
@include('_partials.footer')

@endsection

