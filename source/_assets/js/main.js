const navbar = document.getElementById("navbar");
const mobileMenu = document.getElementById("mobile-menu");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

document.addEventListener("DOMContentLoaded", () => {
    // Navbar scroll
    const navbar = document.getElementById("navbar");

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white/15", "backdrop-blur-lg");
        } else {
            navbar.classList.remove("bg-white/15", "backdrop-blur-lg");
        }
    }

    window.addEventListener("scroll", handleScroll);

    // Mobile menu
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuBtn) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("-translate-x-full");
            mobileMenu.classList.add("translate-x-0");
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("translate-x-0");
            mobileMenu.classList.add("-translate-x-full");
        });
    }

    // FAQs
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

// Inicializar Swiper
if (document.querySelector('.mySwiper')) {
    setTimeout(() => {
        new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 3500,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    }, 100);
}

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
});