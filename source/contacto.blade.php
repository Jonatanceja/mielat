@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

<main class="px-4">
    
<section class="mt-32 max-w-6xl mx-auto px-4">
    <div class="text-center mb-16 flex flex-col gap-5">
        <h1 class="text-center text-4xl/13 md:text-6xl/19 font-semibold tracking-tight max-w-4xl mx-auto">Contáctanos</h1>
        <p class="text-center text-base/7 text-gray-100 max-w-md mx-auto">Estamos aquí para ayudarte. Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Columna de Información de Contacto -->
        <div class="space-y-6">
            <div class="glass rounded-2xl p-8">
                <h2 class="text-2xl font-semibold text-white mb-6">Información de Contacto</h2>
                
                <!-- Dirección -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="glass rounded-full p-3 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin size-5">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white mb-1">Dirección</h3>
                        <p class="text-gray-100 text-sm/6">Calle Vidrio 2188, Col Americana<br>Col. Obrera, 44520 Guadalajara, Jal.</p>
                    </div>
                </div>

                <!-- Teléfono -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="glass rounded-full p-3 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone size-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white mb-1">Teléfono</h3>
                        <p class="text-gray-100 text-sm/6">
                            <a href="tel:+523317698384" class="hover:text-white transition">+52 33 1769 8384</a><br>
                        </p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="glass rounded-full p-3 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail size-5">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white mb-1">Email</h3>
                        <p class="text-gray-100 text-sm/6">
                            <a href="mailto:gerente.seguridad@mie.lat" class="hover:text-white transition">gerente.seguridad@mie.lat</a><br>
                        </p>
                    </div>
                </div>

                <!-- Horario -->
                <div class="flex items-start gap-4">
                    <div class="glass rounded-full p-3 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white mb-1">Horario de Atención</h3>
                        <p class="text-gray-100 text-sm/6">Lunes a Viernes: 9:00 AM - 6:00 PM<br>Sábados: 9:00 AM - 2:00 PM<br>Domingos: Cerrado</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna de Formulario -->
        <div class="glass rounded-2xl p-8">
            <h2 class="text-2xl font-semibold text-white mb-6">Envíanos un Mensaje</h2>
            <form action="/contacto-enviar.php" method="POST" class="space-y-5" id="contactForm">
                <!-- Nombre -->
                <div>
                    <label for="nombre" class="block text-sm font-medium text-white mb-2">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-3 rounded-lg glass border border-white/10 focus:border-white/30 focus:outline-none text-white placeholder-gray-400 transition" placeholder="Tu nombre">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-white mb-2">Correo electrónico</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg glass border border-white/10 focus:border-white/30 focus:outline-none text-white placeholder-gray-400 transition" placeholder="tu@email.com">
                </div>

                <!-- Teléfono -->
                <div>
                    <label for="telefono" class="block text-sm font-medium text-white mb-2">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="w-full px-4 py-3 rounded-lg glass border border-white/10 focus:border-white/30 focus:outline-none text-white placeholder-gray-400 transition" placeholder="+52 33 1234 5678">
                </div>

                <!-- Asunto -->
                <div>
                    <label for="asunto" class="block text-sm font-medium text-white mb-2">Asunto</label>
                    <select id="asunto" name="asunto" required class="w-full px-4 py-3 rounded-lg glass border border-white/10 focus:border-white/30 focus:outline-none text-white transition">
                        <option value="">Selecciona un asunto</option>
                        <option value="cotizacion">Solicitar cotización</option>
                        <option value="soporte">Soporte técnico</option>
                        <option value="ventas">Información de ventas</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <!-- Mensaje -->
                <div>
                    <label for="mensaje" class="block text-sm font-medium text-white mb-2">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required class="w-full px-4 py-3 rounded-lg glass border border-white/10 focus:border-white/30 focus:outline-none text-white placeholder-gray-400 transition resize-none" placeholder="Escribe tu mensaje aquí..."></textarea>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="w-full btn glass py-3 flex items-center justify-center gap-2 hover:-translate-y-0.5 transition-all">
                    Enviar Mensaje
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                        <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                        <path d="m21.854 2.147-10.94 10.939"></path>
                    </svg>
                </button>
            </form>
            
            <!-- Mensajes de respuesta -->
            @if(isset($_GET['success']))
                <div class="max-w-6xl mx-auto px-4 mb-6">
                    <div class="glass rounded-lg p-4 border border-green-500/30 bg-green-500/10">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle text-green-400">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-white">¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.</p>
                        </div>
                    </div>
                </div>
                @endif

                @if(isset($_GET['error']))
                <div class="max-w-6xl mx-auto px-4 mb-6">
                    <div class="glass rounded-lg p-4 border border-red-500/30 bg-red-500/10">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alert-circle text-red-400">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" x2="12" y1="8" y2="12"></line>
                                <line x1="12" x2="12.01" y1="16" y2="16"></line>
                            </svg>
                            <p class="text-white">
                                @if($_GET['error'] == 'envio')
                                    Error al enviar el mensaje. Por favor, intenta de nuevo.
                                @else
                                    {{ urldecode($_GET['error']) }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                @endif
        </div>
    </div>
</section>
    
</main>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();
    
    if (!nombre || !email || !mensaje) {
        e.preventDefault();
        alert('Por favor completa todos los campos obligatorios');
        return false;
    }
    
    // Validar email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        e.preventDefault();
        alert('Por favor ingresa un email válido');
        return false;
    }
});
</script>

@include('_partials.footer')

@endsection