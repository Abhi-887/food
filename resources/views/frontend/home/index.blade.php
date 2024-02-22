@extends('frontend.layouts.master')

@section('content')
     <!-- ======= Hero Section ======= -->
@include('frontend.home.components.hero')
<!-- End Hero -->



    <!-- ======= About Section ======= -->
    @include('frontend.home.components.about')
    <!-- End About Section -->

    <!-- ======= Values Section ======= -->
    @include('frontend.home.components.values')
    <!-- End Values Section -->






    <!--=============================
           TESTIMONIAL  START
        ==============================-->
    {{-- @include('frontend.home.components.testimonial') --}}

    <!--=============================
            TESTIMONIAL END
        ==============================-->


    <!--=============================
            COUNTER START
        ==============================-->
    @include('frontend.home.components.counter')

    <!--=============================
            COUNTER END
        ==============================-->


        <!-- ======= Services Section ======= -->
    @include('frontend.home.components.services')
    <!-- End Services Section -->

       <!-- ======= Clients Section ======= -->
       @include('frontend.home.components.clients')
       <!-- End Clients Section -->


    <!--=============================
            BLOG 2 START
        ==============================-->
    @include('frontend.home.components.blog')
    <!--=============================
            BLOG 2 END
        ==============================-->


         <!-- ======= Contact Section ======= -->
    @include('frontend.home.components.contact')
    <!-- End Contact Section -->
@endsection
