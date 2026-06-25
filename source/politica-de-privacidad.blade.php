@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')

<main id="main-content" class="px-4 max-w-3xl mx-auto mt-32 pb-40">
    <h1 class="text-4xl font-semibold text-gray-900 dark:text-white mb-4">Política de Privacidad</h1>
    <p class="text-gray-500 dark:text-gray-400 text-sm mb-12">Última actualización: enero 2026</p>

    <div class="space-y-10 text-gray-600 dark:text-gray-100 text-sm/7">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">1. Responsable del Tratamiento</h2>
            <p>Mayoristas de Distribución Electrónica S de R.L de C.V (en adelante "MIe"), con domicilio en México, es el responsable del tratamiento de sus datos personales conforme a lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP).</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">2. Datos que Recopilamos</h2>
            <p>Recopilamos los siguientes datos personales cuando usted interactúa con nuestro sitio o solicita nuestros servicios:</p>
            <ul class="mt-3 space-y-1 list-disc list-inside text-gray-600 dark:text-gray-100">
                <li>Nombre completo y razón social</li>
                <li>Correo electrónico y número de teléfono</li>
                <li>RFC y datos fiscales para facturación</li>
                <li>Dirección de entrega</li>
                <li>Historial de compras y consultas</li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">3. Finalidad del Tratamiento</h2>
            <p>Sus datos personales serán utilizados para las siguientes finalidades:</p>
            <ul class="mt-3 space-y-1 list-disc list-inside text-gray-600 dark:text-gray-100">
                <li>Procesar pedidos y gestionar la relación comercial</li>
                <li>Emitir facturas y documentos fiscales</li>
                <li>Coordinar envíos y entregas</li>
                <li>Brindar soporte técnico y atención al cliente</li>
                <li>Enviar comunicaciones comerciales y promocionales (con su consentimiento)</li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">4. Transferencia de Datos</h2>
            <p>MIe no vende, arrienda ni comparte sus datos personales con terceros ajenos a la operación, salvo en los siguientes casos: proveedores logísticos para gestión de entregas, instituciones financieras para procesamiento de pagos, y autoridades competentes cuando la ley lo requiera.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">5. Cookies y Tecnologías de Seguimiento</h2>
            <p>Nuestro sitio puede utilizar cookies para mejorar la experiencia de navegación, analizar el tráfico y personalizar el contenido. Puede configurar su navegador para rechazar cookies, aunque esto podría afectar la funcionalidad de algunas secciones del sitio.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">6. Derechos ARCO</h2>
            <p>Usted tiene derecho a Acceder, Rectificar, Cancelar u Oponerse (derechos ARCO) al tratamiento de sus datos personales. Para ejercer estos derechos, puede enviar una solicitud a través de nuestro formulario de contacto indicando el derecho que desea ejercer y los datos que le identifican.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">7. Seguridad de los Datos</h2>
            <p>MIe implementa medidas técnicas y organizativas adecuadas para proteger sus datos personales contra acceso no autorizado, pérdida, alteración o divulgación. Sin embargo, ninguna transmisión por internet es completamente segura, por lo que no podemos garantizar la seguridad absoluta de la información transmitida.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">8. Conservación de Datos</h2>
            <p>Conservaremos sus datos personales durante el tiempo necesario para cumplir con las finalidades descritas en esta política, así como para dar cumplimiento a obligaciones legales y fiscales aplicables, que en México pueden extenderse hasta por cinco años.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">9. Cambios a esta Política</h2>
            <p>MIe puede actualizar esta Política de Privacidad periódicamente. Le notificaremos cualquier cambio relevante a través de nuestro sitio web. Le recomendamos revisar esta página regularmente para mantenerse informado sobre cómo protegemos su información.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">10. Contacto</h2>
            <p>Si tiene preguntas sobre esta Política de Privacidad o sobre el tratamiento de sus datos personales, puede contactarnos a través de nuestro formulario de contacto o directamente en nuestras oficinas.</p>
        </section>

    </div>
</main>

@include('_partials.footer')
@endsection
