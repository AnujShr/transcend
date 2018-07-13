@extends('layouts.master')
@section('page-content')
<!-- home
================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg"
         data-natural-width=3000 data-natural-height=2000 data-position-y=top>
    @include('front.top-section')
</section> <!-- end s-home -->


<!-- styles
================================================== -->
<section id="styles" class="s-styles">

    @include('front.about')
    @include('front.content-section')
</section> <!-- end styles -->


<!-- contact
================================================== -->
<section id="contact" class="s-contact">
    @include('front.contact')
</section> <!-- end s-contact -->

@endsection
