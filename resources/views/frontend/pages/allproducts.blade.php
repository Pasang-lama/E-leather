@extends('frontend.layouts.master')
@section('content')
@php
if(isset($category_name)){
   $showcategory_breadcrumb = true;
} else {
   $showcategory_breadcrumb = false;
}
@endphp
<section class="breadcrumb-section py-4">
   <div class="container">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
               @if($group_slug != '')
               <li class="breadcrumb-item {{ ($showcategory_breadcrumb == false) ? 'active' : '' }}">
                  <a href="{{ route('productsSuitableFor',[$group_slug]) }}">
                     {{ $group_name }}
                  </a>
               </li>
               @else 
                  <li class="breadcrumb-item {{ ($showcategory_breadcrumb == false) ? 'active' : '' }}">
                     <a>{{ $group_name }}</a>
                  </li>
               @endif
            </li>
            @if($showcategory_breadcrumb == true)
            <li class="breadcrumb-item active">
               <a>{{ $category_name->category_name }}</a>
            </li>
            @endif
         </ol>
      </nav>
   </div>
</section>
<section class="product-categories-section custom-margin">
   <div class="container">
      <div class="page-title">
         <h4>
            @if($showcategory_breadcrumb == true)
            {{  $category_name->category_name }}
            @else 
            {{ $group_name }}
            @endif
         </h4>
      </div>
      <div class="row gy-4 ">
         <div class="col-lg-3 col-md-4 col-sm-12">
            @include('frontend.pages.partials.sidesearch')
         </div>
         <div class="col-lg-9 col-md-8 col-sm-12" id="ajaxLoadedProducts">
            @include('frontend.pages.partials.productslist')
         </div>
      </div>
   </div>
</section>
@endsection