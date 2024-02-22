@extends('frontend.layouts.master')
@section('title', 'blog')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li>Blog Single</li>
            </ol>
            <h2>Blogs</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach ($blogs as $blog)
                    <article class="entry entry-single" data-wow-duration="1s">
                        <div class="entry-img">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{ route('blogs.details', $blog->slug) }}">{{ truncate($blog->title, 30) }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="#">{{ $blog->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="#"><time
                                            datetime="{{ date('Y-m-d', strtotime($blog->created_at)) }}">{{ date('M d, Y', strtotime($blog->created_at)) }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="#">{{ $blog->comments_count }} comment</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {{-- Your blog content goes here --}}
                            </p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">{{ $blog->category->name }}</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </article><!-- End blog entry -->
                    @endforeach

                    <!-- Add your comment section here -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <!-- Sidebar Search Form -->

                        <h3 class="sidebar-title">Categories</h3>
                        <!-- Sidebar Categories -->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <!-- Sidebar Recent Posts -->

                        <h3 class="sidebar-title">Tags</h3>
                        <!-- Sidebar Tags -->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main>

@endsection
