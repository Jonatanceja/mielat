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

@endsection
