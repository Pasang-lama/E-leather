@extends('frontend.layouts.master')
@section('content')
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div>
</section>
<section class="new-pages-section custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
            <div class="page-title">
                    <h4>{{ $title }}</h4>
                </div>  
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="new-pages-content">{!! $page_details->page_description !!}</div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <figure>
                    <img class="d-block w-100" src="{{ ($page_details->page_image != '') && file_exists(public_path('images/pages/'.$page_details->page_image)) ? asset('images/pages/'.$page_details->page_image) :'images/default.png' }}" alt="{{ $title }}">
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection
