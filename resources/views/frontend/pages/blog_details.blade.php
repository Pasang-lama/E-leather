@extends('frontend.layouts.master')
@section('content')
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('frontend.blogs') }}">Blogs</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div>
</section>
<section class="blog-section custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="page-title">
                    <h4>{{ $title }}</h4>
                </div>
                <div class="blog-cover-image">
                    <figure>
                        <img class="d-block w-100"
                            src="{{ (($blog_details->blog_image != '') && file_exists(public_path('images/blogs/'.$blog_details->blog_image))) ? asset('images/blogs/'.$blog_details->blog_image) : asset('images/default.png') }}"
                            alt="{{ $title }}">
                    </figure>
                    <div class="published-date">
                        <span class="day">{{ date('d', strtotime($blog_details->created_at) )}}</span>
                        <span class="month">{{ date('M', strtotime($blog_details->created_at) )}}</span>
                    </div>
                </div>
                <div class="blog-content-page pt-4">
                    <div class="mb-3">
                        {!! $blog_details->blog_description !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="search-post d-none">
                    <form action="">
                        <input type="text" placeholder="Enter your keywords...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="recent-post ">
                    <div class="page-title">
                        <h4>Recent Post</h4>
                    </div>
                    @if($blogs->isNotEmpty())
                    <div class="wrapper">
                        <ul>
                            @foreach($blogs as $blog)
                            <li>
                                <a href="{{ route('frontend.blog_details',[$blog->blog_slug]) }}">
                                    <div class="blog-recent ">
                                        <div class="blog-heading">
                                            <figure>
                                                <img class="d-block w-100"
                                                    src="{{ (($blog->blog_image != '') && file_exists(public_path('images/blogs/'.$blog->blog_image))) ? asset('images/blogs/'.$blog->blog_image) : asset('images/default.png') }}"
                                                    alt="{{ $blog->blog_title }}">
                                            </figure>
                                        </div>
                                        <div class="blog-body">
                                            <div class="blog-title">
                                                <h4>{{ Str::words(strip_tags($blog->blog_title), 13)}}</h4>
                                            </div>
                                            <div class="date">
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ date('d F Y', strtotime($blog->created_at)) }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                    @endif
                </div>

            </div>
        </div>

    </div>
</section>

@endsection