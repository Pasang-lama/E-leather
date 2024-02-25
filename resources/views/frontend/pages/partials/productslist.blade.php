<section class="trending-section ">
    <div class="container">
        <div class="product-preview-section">
            <div class="row gy-4">
                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card" data-pcount="{{ $loop->iteration }}"
                                data-section="numberNewArrivals">
                                <div class="card-heading">
                                    <a href="{{ route('main_product', [$product->slug]) }}">
                                        <figure>
                                            <img class="d-block w-100"
                                                src="{{ $product->product_image != '' && file_exists(public_path('images/' . $product->product_image)) ? asset('images/' . $product->product_image) : asset('images/default.png') }}"
                                                alt="{{ $product->product_name }}">
                                        </figure>
                                    </a>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist add-to-wishlist"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Add to Wishlist" href=""><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details"
                                                    href="{{ route('main_product', [$product->slug]) }}"><i
                                                        class="fas fa-search"></i></a></li>
                                            {{-- <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                 </li> --}}
                                        </ul>
                                    </div>
                                    @if ($product->discount_percent != '' || $product->discount_percent > 0)
                                        <div class="sale">
                                            <span>-{{ $product->discount_percent }}%</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">{{ $product->product_name }}</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1">
                                        @if ($product->special_price > 0)
                                            <span class="text-decoration-line-through text-muted pe-1">
                                                {{ env('DEFAULT_CURRENCY_SYMBOL', 'Rs.') }}{{ formatcurrency($product->regular_price, 'NPR') }}
                                            </span>
                                            <span>
                                                {{ env('DEFAULT_CURRENCY_SYMBOL', 'Rs.') }}{{ formatcurrency($product->special_price, 'NPR') }}
                  @php($product_price = $product->special_price)

                                            </span>
                                        @else
                                            <span>
                                                {{ env('DEFAULT_CURRENCY_SYMBOL', 'Rs.') }}{{ formatcurrency($product->regular_price, 'NPR') }}
                  @php($product_price = $product->regular_price)

                                            </span>
                                        @endif
                                    </div>
                                    <div class="add-to-cart-button">
                                        <form>
                                            <div id="numberNewArrivalsDiv{{ $loop->iteration }}"
                                                class="product-sizes-listing d-none value-button"
                                              >
                                                {{ getProductAttr($product->id, 'size') }}
                                            </div>
                                            <div class="value-button" id="decrease"
                                                onclick="decreaseValue('numberNewArrivals',{{ $loop->iteration }})"
                                                value="Decrease Value">-
                                            </div>
                                            <input type="number" id="numberNewArrivals{{ $loop->iteration }}"
                                                value="1" class="product_qty" data-id="{{ $product->id }}"
                                                data-sp="{{ $product_price }}"
                                                data-title="{{ $product->product_name }}"
                                                data-size="{{ getProductAttr($product->id, 'size') }}"
                                                data-sp="{{ $product->regular_price }}"
                                                data-stock="{{ getProductAttr($product->id, 'stock') }}" />

                                            <div class="value-button" id="increase"
                                                onclick="increaseValue('numberNewArrivals',{{ $loop->iteration }})"
                                                value="Increase Value">+
                                            </div>
                                            <button class="Add-to-card value-button addToCartAjax"
                                                data-pcount="{{ $loop->iteration }}"
                                                data-section="numberNewArrivals">Add to
                                                Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p class="h-50 d-flex align-items-center justify-content-center">No Products Found</p>
                    </div>
                @endif

                <div class="col-lg-12 col-md-12 col-sm-12 h-50 d-flex align-items-center justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
