<footer class="custom-margin">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>
                        <span>Further Information</span>
                    </li>
                    <li><a href="{{ route('frontend.aboutus') }}">About us</a></li>
                    <li><a href="{{ route('frontend.brands') }}">Brands</a></li>
                    <li><a href="{{ route('frontend.blogs') }}">Blog</a></li>
                    {{--
               <li><a href="#">New Collection</a></li>
               --}}
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>
                        <span>Products Categories</span>
                    </li>
                    @if($categories->isNotEmpty())
                    @php($categories = $categories->take(4))
                    @foreach($categories as $category)
                    <li>
                        <a href="{{ route('category', [$category->slug]) }}">
                            {{ $category->category_name }}
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>
                        <span>Customer Support</span>
                    </li>
                    <li><a href="{{ route('frontend.pages_details',['leather-maintanance']) }}">Leather Maintance</a></li>
                    <li><a href="{{ route('frontend.pages_details',['return-refunds']) }}">Return & Refunds</a></li>
                    <li><a href="{{ route('frontend.pages_details',['terms-condition']) }}">Terms & Condition</a></li>
                    <li><a href="{{ route('frontend.pages_details',['privacy-policy']) }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul class="contact-us-info">
                    <li>
                        <span>Contact us</span>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <a>
                            {{ $setting_com->address }}
                        </a>
                    </li>
                    <li><i class="fas fa-envelope"></i>
                        <div class="wrapper">
                            {!! getClickableLinks($setting_com->email, "email") !!}
                        </div>
                    </li>
                    <li>

                        <i class="fas fa-phone-alt"></i>
                        <div class="wrapper">
                            {!! getClickableLinks($setting_com->phone_number, "phone") !!}
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <div class="wrapper">
                            {!! getClickableLinks($setting_com->mobile_number, "phone") !!}
                        </div>
                    </li>
                </ul>
                <div class="payment-info">
                    <span>payment method</span>
                    <div class="partner mt-2">
                        <img class="d-block" src="{{ asset('frontend/images/esewa.png') }} " alt="Esewa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-media">
        @if($setting_com->facebook_link != NULL)
        <a href="{{ $setting_com->facebook_link}}" target="_blank" src="facebook"><i class="fab fa-facebook"></i></a>
        @endif
        @if($setting_com->instagram_link != NULL)
        <a href="{{ $setting_com->instagram_link}}" target="_blank" src="instagram"><i class="fab fa-instagram"></i></a>
        @endif
        @if($setting_com->tiktok_link != NULL)
        <a href="{{ $setting_com->tiktok_link }}" target="_blank" src="tiktok"><i class="fab fa-tiktok"></i></a>
        @endif
        @if($setting_com->youtube_link != NULL)
        <a href="{{ $setting_com->youtube_link }}" target="_blank" src="youtube"><i class="fab fa-youtube"></i></a>
        @endif
    </div>
    <div class="container">
        <div class="copy-right">
            <p>Copyright © {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>