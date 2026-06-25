@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')

<main id="main-content" class="px-4 max-w-3xl mx-auto mt-32 pb-40">
    <h1 class="text-4xl font-semibold text-gray-900 dark:text-white mb-4">Términos y Condiciones</h1>
    <p class="text-gray-500 dark:text-gray-400 text-sm mb-12">Última actualización: enero 2026</p>

    <div class="space-y-10 text-gray-600 dark:text-gray-100 text-sm/7">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">1. Aceptación de los Términos</h2>
            <p>Al acceder y utilizar el sitio web de Mayoristas de Integración Electrónica (MIe), usted acepta estar sujeto a estos Términos y Condiciones. Si no está de acuerdo con alguna parte de estos términos, le pedimos que no utilice nuestros servicios.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">2. Uso del Sitio</h2>
            <p>Este sitio web está destinado exclusivamente a distribuidores, integradores y empresas del sector de seguridad electrónica. El uso del sitio para fines personales o ajenos a la actividad comercial B2B queda fuera del alcance de nuestros servicios.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">3. Productos y Precios</h2>
            <p>Los productos, especificaciones técnicas y precios presentados en este sitio están sujetos a cambios sin previo aviso. MIe se reserva el derecho de modificar o descontinuar cualquier producto en cualquier momento. Los precios mostrados son referenciales y pueden variar según volumen, disponibilidad y condiciones comerciales acordadas.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">4. Pedidos y Facturación</h2>
            <p>Todo pedido está sujeto a confirmación de disponibilidad de inventario y aprobación crediticia. MIe emitirá factura conforme a los datos fiscales proporcionados por el cliente al momento del registro. Es responsabilidad del cliente verificar que los datos de facturación sean correctos antes de confirmar el pedido.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">5. Envíos y Entregas</h2>
            <p>Los tiempos de entrega son estimados y pueden variar según la disponibilidad del producto y la ubicación del destino. MIe no se hace responsable por retrasos ocasionados por causas ajenas a su control, incluyendo condiciones climatológicas, problemas con transportistas o situaciones de fuerza mayor.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">6. Devoluciones y Garantías</h2>
            <p>Las devoluciones deben solicitarse dentro de los 30 días naturales posteriores a la recepción del producto, siempre que éste se encuentre en su empaque original y sin signos de uso. Las garantías de los productos están sujetas a las políticas del fabricante. MIe actúa como intermediario en los procesos de garantía con el proveedor correspondiente.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">7. Propiedad Intelectual</h2>
            <p>Todo el contenido de este sitio web —incluyendo textos, imágenes, logotipos y diseño— es propiedad de Mayoristas de Integración Electrónica o de sus respectivos propietarios y está protegido por las leyes de propiedad intelectual aplicables. Queda prohibida su reproducción total o parcial sin autorización escrita.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">8. Limitación de Responsabilidad</h2>
            <p>MIe no será responsable por daños directos, indirectos, incidentales o consecuentes derivados del uso o la imposibilidad de uso de este sitio o de los productos adquiridos, más allá de lo estrictamente establecido por la legislación mexicana aplicable.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">9. Modificaciones</h2>
            <p>MIe se reserva el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigor desde el momento de su publicación en este sitio. El uso continuado del sitio implica la aceptación de los términos actualizados.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">10. Contacto</h2>
            <p>Para cualquier consulta relacionada con estos Términos y Condiciones, puede contactarnos a través de nuestro formulario de contacto o directamente en nuestras oficinas.</p>
        </section>

    </div>
</main>

@include('_partials.footer')
@endsection
