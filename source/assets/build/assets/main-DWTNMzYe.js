document.getElementById("navbar");const a=document.getElementById("mobile-menu"),d=document.getElementById("menu-btn"),u=document.getElementById("close-btn");document.addEventListener("DOMContentLoaded",()=>{const t=document.getElementById("navbar");function e(){window.scrollY>50?t.classList.add("bg-white/15","backdrop-blur-lg"):t.classList.remove("bg-white/15","backdrop-blur-lg")}window.addEventListener("scroll",e)});d.addEventListener("click",()=>{a.classList.remove("-translate-x-full"),a.classList.add("translate-x-0")});u.addEventListener("click",()=>{a.classList.remove("translate-x-0"),a.classList.add("-translate-x-full")});const m=[{question:"Do I need coding or design experience to use PrebuiltUI?",answer:"Basic coding knowledge (HTML/CSS, Tailwind) helps, but advanced design skills aren't required. You can use components as-is or customize them."},{question:"What is PrebuiltUI and how does it help developers and designers?",answer:"PrebuiltUI provides ready-to-use, customizable UI components and templates, saving time for developers and designers."},{question:"Can I use PrebuiltUI components in my existing project?",answer:"Yes, components can be integrated into HTML, React, Next.js, Vue, and other projects using Tailwind CSS."},{question:"How customizable are the generated components?",answer:"Components are highly customizable with Tailwind utility classes, theming, and structural adjustments."},{question:"Does PrebuiltUI support team collaboration?",answer:"There's no clear documentation on built-in collaboration features. Check their support for team options."},{question:"Can I try PrebuiltUI before purchasing a plan?",answer:"Yes, you can try PrebuiltUI with full access to features."}],l=document.getElementById("faq-container");if(l){l.innerHTML=m.map((e,n)=>`
        <div class="faq-item flex flex-col glass rounded-md">
            <h3 
                class="faq-header flex cursor-pointer hover:bg-white/10 transition items-start justify-between gap-4 p-4 font-medium"
                data-index="${n}"
            >
                ${e.question}
                <svg class="chevron size-5 transition-all shrink-0 duration-400"
                    fill="none" stroke="currentColor" stroke-width="2" 
                    viewBox="0 0 24 24">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </h3>
            <p class="faq-content px-4 text-sm/6 transition-all duration-400 overflow-hidden max-h-0">
                ${e.answer}
            </p>
        </div>
    `).join("");let t=null;document.querySelectorAll(".faq-header").forEach(e=>{e.addEventListener("click",()=>{const n=e.getAttribute("data-index"),s=e.nextElementSibling,i=e.querySelector(".chevron");t===n?(s.classList.remove("pt-2","pb-4","max-h-80"),s.classList.add("max-h-0"),i.classList.remove("rotate-180"),t=null):(document.querySelectorAll(".faq-content").forEach(o=>{o.classList.remove("pt-2","pb-4","max-h-80"),o.classList.add("max-h-0")}),document.querySelectorAll(".chevron").forEach(o=>o.classList.remove("rotate-180")),s.classList.remove("max-h-0"),s.classList.add("pt-2","pb-4","max-h-80"),i.classList.add("rotate-180"),t=n)})})}const r=document.getElementById("mobile-products-btn"),c=document.getElementById("mobile-products-menu"),b=document.getElementById("mobile-chevron");r&&r.addEventListener("click",()=>{c.classList.toggle("hidden"),c.classList.toggle("flex"),b.classList.toggle("rotate-180")});
