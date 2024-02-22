@extends('frontend.layouts.master')
@section('title', 'blog-single')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                    <li>Blog Single</li>
                </ol>
                <h2>Blog Single</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> By {{ $blog->user->name }}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{ $blog->created_at }}">{{ date('M d, Y', strtotime($blog->created_at)) }}</time></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> {{ count($comments) }} Comments</li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                {!! $blog->description !!}
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    @if($blog->categories)
                                        @foreach ($blog->categories as $category)
                                            <li><a href="{{ route('blogs', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>


                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @if($blog->tags)
                                    @foreach ($blog->tags as $tag)
                                        <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach
                                @endif
                            </ul>


                        </article><!-- End blog entry -->

                        <div class="blog-comments">
                            <h4 class="comments-count">{{ count($comments) }} Comments</h4>

                            @foreach ($comments as $comment)
                                <div class="comment" id="comment-{{ $comment->id }}">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="{{ asset($comment->user->avatar) }}" alt=""></div>
                                        <div>
                                            <h5><a href="#">{{ $comment->user->name }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="{{ $comment->created_at }}">{{ date('M d, Y', strtotime($comment->created_at)) }}</time>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>

                                    <!-- Add replies section if needed -->

                                </div><!-- End comment #1 -->
                            @endforeach

                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="{{ route('blogs.comment.store', $blog->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </form>
                            </div>

                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">
                        <!-- Add your sidebar content here -->
                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main>
@endsection
