// GSAP scroll animations
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const fade = (selector, options = {}) => {
        gsap.utils.toArray(selector).forEach(el => {
            gsap.from(el, {
                opacity: 0,
                y: options.y ?? 24,
                duration: options.duration ?? 0.7,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                },
                ...options.extra,
            });
        });
    };

    // Hero
    fade('h1', { y: 32, duration: 0.9 });
    fade('h1 + p', { y: 20, duration: 0.8, extra: { delay: 0.1 } });

    // Section headings
    fade('h2', { y: 20 });
    fade('h2 + p, h2 ~ p', { y: 16, extra: { delay: 0.08 } });

    // Cards — stagger within each flex/grid container
    document.querySelectorAll('.flex.flex-wrap, .grid').forEach(container => {
        const cards = container.querySelectorAll('.glass');
        if (cards.length > 1) {
            gsap.from(cards, {
                opacity: 0,
                y: 28,
                duration: 0.6,
                ease: 'power2.out',
                stagger: 0.1,
                scrollTrigger: {
                    trigger: container,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                },
            });
        }
    });

    // Standalone glass cards not in a group (exclude CTA which has its own animation)
    fade('.glass:not(.flex .glass):not(.grid .glass):not([data-gsap="cta"])', { y: 20 });

    // Logo strips — staggered
    document.querySelectorAll('#logo-container').forEach(container => {
        const logos = container.querySelectorAll('img');
        if (logos.length) {
            gsap.from(logos, {
                opacity: 0,
                y: 12,
                duration: 0.5,
                ease: 'power2.out',
                stagger: 0.06,
                scrollTrigger: {
                    trigger: container,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                },
            });
        }
    });

    // CTA blocks
    document.querySelectorAll('[data-gsap="cta"]').forEach(el => {
        gsap.from(el, {
            opacity: 0,
            y: 28,
            duration: 0.8,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                toggleActions: 'play none none none',
            },
        });
    });

    // Workflow / history images (exclude logo strip imgs which have their own stagger animation)
    fade('section img:not(#logo-container img)', { y: 20, duration: 0.7 });

    // Timeline items (nosotros)
    fade('.relative.flex.items-center', { y: 20, duration: 0.65, extra: { stagger: 0.12 } });
});

// Dark mode — cycles: system → light → dark
const html = document.documentElement;
const systemDark = window.matchMedia('(prefers-color-scheme: dark)');
const themes = ['system', 'light', 'dark'];

function applyTheme(theme) {
    if (theme === 'dark' || (theme === 'system' && systemDark.matches)) {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }
    updateThemeIcon(theme);
}

const themeIconMap = { system: 'system', light: 'sun', dark: 'moon' };

function updateThemeIcon(theme) {
    const active = themeIconMap[theme];
    ['system', 'sun', 'moon'].forEach(icon => {
        document.getElementById(`icon-${icon}`)?.classList.toggle('hidden', icon !== active);
        document.getElementById(`icon-${icon}-mobile`)?.classList.toggle('hidden', icon !== active);
    });
}

function cycleTheme() {
    const current = localStorage.getItem('theme') ?? 'system';
    const next = themes[(themes.indexOf(current) + 1) % themes.length];
    if (next === 'system') {
        localStorage.removeItem('theme');
    } else {
        localStorage.setItem('theme', next);
    }
    applyTheme(next);
}

// Init
const savedTheme = localStorage.getItem('theme') ?? 'system';
applyTheme(savedTheme);

// Listen for OS preference changes when in system mode
systemDark.addEventListener('change', () => {
    if (!localStorage.getItem('theme')) applyTheme('system');
});

document.getElementById('theme-toggle')?.addEventListener('click', cycleTheme);
document.getElementById('theme-toggle-mobile')?.addEventListener('click', cycleTheme);

const navbar = document.getElementById("navbar");
const mobileMenu = document.getElementById("mobile-menu");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white/15", "backdrop-blur-lg");
        } else {
            navbar.classList.remove("bg-white/15", "backdrop-blur-lg");
        }
    }

    window.addEventListener("scroll", handleScroll);
});


menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
    mobileMenu.classList.add("translate-x-0");
});

closeBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("-translate-x-full");
});

const faqs = [
    {
        question: 'Do I need coding or design experience to use PrebuiltUI?',
        answer: "Basic coding knowledge (HTML/CSS, Tailwind) helps, but advanced design skills aren't required. You can use components as-is or customize them.",
    },
    {
        question: 'What is PrebuiltUI and how does it help developers and designers?',
        answer: 'PrebuiltUI provides ready-to-use, customizable UI components and templates, saving time for developers and designers.',
    },
    {
        question: 'Can I use PrebuiltUI components in my existing project?',
        answer: 'Yes, components can be integrated into HTML, React, Next.js, Vue, and other projects using Tailwind CSS.',
    },
    {
        question: 'How customizable are the generated components?',
        answer: 'Components are highly customizable with Tailwind utility classes, theming, and structural adjustments.',
    },
    {
        question: 'Does PrebuiltUI support team collaboration?',
        answer: "There's no clear documentation on built-in collaboration features. Check their support for team options.",
    },
    {
        question: 'Can I try PrebuiltUI before purchasing a plan?',
        answer: 'Yes, you can try PrebuiltUI with full access to features.',
    },
];

const container = document.getElementById('faq-container');

if (container) {
    container.innerHTML = faqs.map((item, index) => `
        <div class="faq-item flex flex-col glass rounded-md">
            <h3 
                class="faq-header flex cursor-pointer hover:bg-white/10 transition items-start justify-between gap-4 p-4 font-medium"
                data-index="${index}"
            >
                ${item.question}
                <svg class="chevron size-5 transition-all shrink-0 duration-400"
                    fill="none" stroke="currentColor" stroke-width="2" 
                    viewBox="0 0 24 24">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </h3>
            <p class="faq-content px-4 text-sm/6 transition-all duration-400 overflow-hidden max-h-0">
                ${item.answer}
            </p>
        </div>
    `).join("");

    let openIndex = null;

    document.querySelectorAll(".faq-header").forEach(header => {
        header.addEventListener("click", () => {
            const index = header.getAttribute("data-index");
            const content = header.nextElementSibling;
            const icon = header.querySelector(".chevron");

            if (openIndex === index) {
                content.classList.remove("pt-2", "pb-4", "max-h-80");
                content.classList.add("max-h-0");
                icon.classList.remove("rotate-180");
                openIndex = null;
            } else {
                document.querySelectorAll(".faq-content").forEach(c => {
                    c.classList.remove("pt-2", "pb-4", "max-h-80");
                    c.classList.add("max-h-0");
                });
                document.querySelectorAll(".chevron").forEach(i => i.classList.remove("rotate-180"));

                content.classList.remove("max-h-0");
                content.classList.add("pt-2", "pb-4", "max-h-80");
                icon.classList.add("rotate-180");
                openIndex = index;
            }
        });
    });
}

const plans = [
    {
        icon: `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket size-3.5" aria-hidden="true">
                <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
            </svg>
        `,
        title: 'Starter',
        description: 'For individuals and small teams',
        price: '$19',
        buttonText: 'Get Started',
        features: [
            'Up to 10 projects',
            '10 AI tasks/month',
            'Basic text generation',
            'Simple chatbot access',
            'Email support only',
            'Community resources'
        ]
    },
    {
        icon: `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-3.5" aria-hidden="true">
                <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
            </svg>
        `,
        title: 'Professional',
        description: 'For growing teams and startups',
        price: '$49',
        mostPopular: true,
        buttonText: 'Upgrade Now',
        features: [
            'Unlimited AI tasks',
            'API integration',
            'Text & image outputs',
            'Priority chat & email support',
            'Detailed analytics',
            'Team collaboration'
        ]
    },
    {
        icon: `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown size-3.5" aria-hidden="true">
                <path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z"></path>
                <path d="M5 21h14"></path>
            </svg>
        `,
        title: 'Enterprise',
        description: 'For enterprises and agencies',
        price: '$149',
        buttonText: 'Contact Sales',
        features: [
            'Custom AI models',
            'Team access control',
            'Dedicated account manager',
            'Secure private API',
            'SLA uptime guarantee',
            '24/7 premium support'
        ]
    }
];




// Dropdown móvil para productos
const mobileProductsBtn = document.getElementById('mobile-products-btn');
const mobileProductsMenu = document.getElementById('mobile-products-menu');
const mobileChevron = document.getElementById('mobile-chevron');

if (mobileProductsBtn) {
    mobileProductsBtn.addEventListener('click', () => {
        mobileProductsMenu.classList.toggle('hidden');
        mobileProductsMenu.classList.toggle('flex');
        mobileChevron.classList.toggle('rotate-180');
    });
}