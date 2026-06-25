<nav id="navbar" class="sticky top-0 z-50 flex w-full items-center justify-between px-4 py-3.5 md:px-16 lg:px-24 transition-all duration-300" aria-label="Navegación principal">
    <a href="/" aria-label="Mayoristas de Integración Electrónica – Inicio">
        <img alt="Mayoristas de Integración Electrónica" loading="lazy" width="205" height="48" decoding="async" class="h-14 w-auto dark:block hidden" src="/assets/images/logo-mie.svg" />
        <img alt="Mayoristas de Integración Electrónica" loading="lazy" width="205" height="48" decoding="async" class="h-14 w-auto dark:hidden block" src="/assets/images/logo-mie-dark.svg" />
    </a>
    <div class="hidden items-center space-x-10 md:flex">
        <a class="transition hover:text-gray-500 dark:hover:text-gray-300" href="/">Inicio</a>
        <a class="transition hover:text-gray-500 dark:hover:text-gray-300" href="/nosotros">Nosotros</a>

        <!-- Dropdown Productos -->
        <div class="relative group">
            <button
                id="desktop-products-btn"
                class="transition hover:text-gray-500 dark:hover:text-gray-300 flex items-center gap-1"
                aria-haspopup="true"
                aria-expanded="false"
                aria-controls="desktop-products-menu"
            >
                Productos
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down transition-transform group-hover:rotate-180" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="desktop-products-menu" role="menu" aria-labelledby="desktop-products-btn" class="absolute top-full left-0 mt-6 w-64 rounded-xl p-2 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-lg z-[999]">
                @foreach($products as $product)
                <a href="{{ $product->getPath() }}" role="menuitem" class="block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 transition">
                    {{ $product->title }}
                </a>
                @endforeach
            </div>
        </div>

        <!-- Theme toggle -->
        <button id="theme-toggle" class="transition hover:opacity-70 active:scale-90" aria-label="Cambiar tema">
            <svg id="icon-system" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
                <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                <path d="M8 21h8M12 17v4"></path>
            </svg>
            <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
            </svg>
            <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
            </svg>
        </button>

        <a class="btn glass" href="/contacto">Contacto</a>
    </div>
    <button id="menu-btn" class="transition active:scale-90 md:hidden" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu size-6.5" aria-hidden="true">
            <path d="M4 5h16"></path>
            <path d="M4 12h16"></path>
            <path d="M4 19h16"></path>
        </svg>
    </button>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Menú de navegación" aria-hidden="true" class="fixed inset-0 z-50 flex flex-col items-center justify-center gap-6 bg-white/90 dark:bg-black/20 text-lg font-medium backdrop-blur-2xl transition duration-300 md:hidden -translate-x-full">
    <a class="transition hover:text-gray-500 dark:hover:text-gray-300" href="/">Inicio</a>
    <a class="transition hover:text-gray-500 dark:hover:text-gray-300" href="/nosotros">Nosotros</a>

    <!-- Dropdown Mobile -->
    <div class="flex flex-col items-center gap-3">
        <button
            id="mobile-products-btn"
            class="transition hover:text-gray-500 dark:hover:text-gray-300 flex items-center gap-1"
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="mobile-products-menu"
        >
            Productos
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down transition-transform" id="mobile-chevron" aria-hidden="true">
                <path d="m6 9 6 6 6-6"></path>
            </svg>
        </button>

        <div id="mobile-products-menu" class="hidden flex-col items-center gap-2 mt-2">
            @foreach($products as $product)
            <a href="{{ $product->getPath() }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition">
                {{ $product->title }}
            </a>
            @endforeach
        </div>
    </div>

    <!-- Theme toggle mobile -->
    <button id="theme-toggle-mobile" class="transition hover:opacity-70 active:scale-90" aria-label="Cambiar tema">
        <svg id="icon-system-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
            <rect x="2" y="3" width="20" height="14" rx="2"></rect>
            <path d="M8 21h8M12 17v4"></path>
        </svg>
        <svg id="icon-sun-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
            <circle cx="12" cy="12" r="4"></circle>
            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
        </svg>
        <svg id="icon-moon-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>
    </button>

    <a class="btn glass" href="/contacto">Contacto</a>
    <button id="close-btn" class="rounded-md p-2 glass absolute top-5 right-2" aria-label="Cerrar menú">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>
