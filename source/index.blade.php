@extends('_layouts.main')

@section('body')

@include('_partials.nav')
@include('_partials.bg')       

        

<main class="px-4">
@include('_partials.hero')         
@include('_partials.features')
@include('_partials.history')
@include('_partials.testimonials')
@include('_partials.cta')
</main>
@include('_partials.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    // Inicializar Swiper cuando el DOM esté listo

    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 800,
    });
</script>
@endsection
