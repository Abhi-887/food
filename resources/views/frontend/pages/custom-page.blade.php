@extends('frontend.layouts.master')
@section('title', $page->name)
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="javascript:;">{{ $page->name }}</a></li>
            </ol>
            <h2>{{ $page->name }}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Page Content Section ======= -->
    <section class="page-content">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12">

                    {{-- <article class="entry entry-single" data-wow-duration="1s">
                        <div class="entry-img">
                            <img src="{{ asset(config('settings.breadcrumb')) }}" alt="{{ $page->name }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">{{ $page->name }}</h2> --}}

                        <!-- Assuming $page->content is HTML content -->
                        <div class="entry-content">
                            {!! $page->content !!}
                        </div>
                    </article><!-- End page entry -->

                </div><!-- End main content column -->
            </div><!-- End main content row -->

        </div>
    </section><!-- End Page Content Section -->

</main>

@endsection
