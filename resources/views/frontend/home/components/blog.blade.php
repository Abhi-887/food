
  <section id="recent-blog-posts" class="recent-blog-posts fp__blog fp__blog2">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Blog</h2>
            <p>Recent posts form our Blog</p>
        </header>
        <div class="row">
            @foreach ($latestBlogs as $blog)
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="post-box fp__single_blog wow fadeInUp" data-wow-duration="1s">
                    <div class="post-img"><img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100"></div>
                    <div class="post-date"><i class="fas fa-calendar-alt"></i> {{ date('d M Y', strtotime($blog->created_at)) }}</div>
                    <h3 class="post-title"><a href="{{ route('blogs.details', $blog->slug) }}">{{ truncate($blog->title, 30) }}</a></h3>
                    <a href="{{ route('blogs.details', $blog->slug) }}" class="readmore stretched-link mt-auto">
                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                    </a>
                    {{-- <div class="fp__single_blog_text">
                        <a class="category" href="{{ route('blogs', ['category' => $blog->category->slug]) }}">{{ $blog->category->name }}</a>
                        <ul class="d-flex flex-wrap mt_15">
                            <li><i class="post-date"></i>{{ $blog->user->name }}</li>
                            <li><i class="post-date"></i> {{ $blog->comments_count }} comment</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>








