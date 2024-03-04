<header>
    <div class="main-header ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <figure><img src="{{ asset('frontend/images/logo.png') }}" alt="{{ env('APP_NAME') }}"></figure>
                </a>
                <!-- search bar for responsive design  -->
                <form action="{{route('frontend.site_search')}}" class="responsive-search-bar">
                    <input type="text" placeholder="Search the Store">
                    <button class="top-search-button" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}"
                                href="{{ route('frontend.aboutus') }}">About us</a>
                        </li>

                        <li class="nav-item dropdown-hover">
                            <a class="nav-link {{ request()->is('products*') || request()->is('category*') ? 'active' : '' }} "
                                href="javascript:void(0);">
                                Products <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="hover-dropdown-menu">
                                <div class="container">
                                    <div class="mega-menu">
                                        <div class="row gy-5 ">
                                            @foreach ($categories as $category)
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <ul>
                                                        <li>
                                                            <span><a href="{{ route('category', $category->slug) }}">{{ $category->category_name }}</a></span>
                                                        </li>
                                                        @php($sub_categories=getSubcategories($category->id))
                                                        @if($sub_categories != NULL)
                                                            @foreach($sub_categories as $sub_cat)
                                                                <li>
                                                                   <span> <a href="{{ route('category', $category->slug) }}">
                                                                       {{ $sub_cat->category_name }} 
                                                                    </a></span>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('brands') ? 'active' : '' }}"
                                href="{{ route('frontend.brands') }}"> Brands
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">
                                Contact us
                            </a>
                        </li>
                    </ul>
                    @include('frontend.layouts.auth')
                    <div class="profile-wishlist-cart">
                        <div class="nav-Search-bar loggedin_menu" style="display: none;">
                            <form action="{{route('frontend.site_search')}}" class="toggle-searchbar" method="get">
                                <div class="search-box-wrapper">
                                    <i class="fa sticky-search-icon fa-search" aria-hidden="true"></i>
                                    <div class="search-box">
                                        <input type="text" name="keywords" placeholder="Search the Store"
                                            autocomplete="off">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="profile loggedin_menu" style="display: none;">
                            <a href="{{ route('customer.dashboard') }}"> <i class="fas fa-user"></i></a>
                        </div>
                        <div class="wishlist loggedin_menu" style="display: none;">
                            <a class="position-relative" href="{{ route('customer.wishlist.index') }}">
                                <i class="fas fa-heart"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge "
                                    id="wishlist-count">
                                    {{ $wishlist_count }}
                                </span>
                            </a>
                        </div>
                        <div class="cart loggedin_menu" style="display: none;">
                            <a class="position-relative" href="{{ route('customer.cart.index') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge"
                                    id="cart-count">
                                    {{ $cart_count }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
