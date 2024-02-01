<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>
</section>
<section class="product-categories-section custom-margin">
    <div class="container">
        <div class="page-title">
            <h4>Men</h4>
        </div>
        <div class="row gy-4 ">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="categories">
                    <div class="categories-name">
                        <h6>Categories</h6>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    men
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li> <input type="checkbox" id="jacket" name="jacket" value="jacket">
                                            <label class="ps-3" for="jacket">Jacket</label>
                                        </li>
                                        <li> <input type="checkbox" id="Belt" name="Belt" value="Belt">
                                            <label class="ps-3" for="Belt">Belt</label>
                                        </li>
                                        <li> <input type="checkbox" id="Pourse" name="Pourse" value="Pourse">
                                            <label class="ps-3" for="Pourse">Pourse</label>
                                        </li>
                                        <li> <input type="checkbox" id="Shoes" name="Shoes" value="Shoes">
                                            <label class="ps-3" for="Shoes">Shoes</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    women
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul>
                                        <li> <input type="checkbox" id="jacket" name="jacket" value="jacket">
                                            <label class="ps-3" for="jacket">Jacket</label>
                                        </li>
                                        <li> <input type="checkbox" id="Belt" name="Belt" value="Belt">
                                            <label class="ps-3" for="Belt">Belt</label>
                                        </li>
                                        <li> <input type="checkbox" id="Pourse" name="Pourse" value="Pourse">
                                            <label class="ps-3" for="Pourse">Pourse</label>
                                        </li>
                                        <li> <input type="checkbox" id="Shoes" name="Shoes" value="Shoes">
                                            <label class="ps-3" for="Shoes">Shoes</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    All Accessories
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul>
                                        <li> <input type="checkbox" id="jacket" name="jacket" value="jacket">
                                            <label class="ps-3" for="jacket">Jacket</label>
                                        </li>
                                        <li> <input type="checkbox" id="Belt" name="Belt" value="Belt">
                                            <label class="ps-3" for="Belt">Belt</label>
                                        </li>
                                        <li> <input type="checkbox" id="Pourse" name="Pourse" value="Pourse">
                                            <label class="ps-3" for="Pourse">Pourse</label>
                                        </li>
                                        <li> <input type="checkbox" id="Shoes" name="Shoes" value="Shoes">
                                            <label class="ps-3" for="Shoes">Shoes</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    New Arrival
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul>
                                        <li> <input type="checkbox" id="jacket" name="jacket" value="jacket">
                                            <label class="ps-3" for="jacket">Jacket</label>
                                        </li>
                                        <li> <input type="checkbox" id="Belt" name="Belt" value="Belt">
                                            <label class="ps-3" for="Belt">Belt</label>
                                        </li>
                                        <li> <input type="checkbox" id="Pourse" name="Pourse" value="Pourse">
                                            <label class="ps-3" for="Pourse">Pourse</label>
                                        </li>
                                        <li> <input type="checkbox" id="Shoes" name="Shoes" value="Shoes">
                                            <label class="ps-3" for="Shoes">Shoes</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prices categories mt-5">
                    <div class="categories-name">
                        <h6>Prices</h6>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li>
                                <input class="me-3" type="radio" id="less-than" name="price" value="less-than" checked>
                                <label for="less-than">Less than Nrs. 15,000</label>
                            </li>
                            <li>
                                <input class="me-3" type="radio" id="between" name="price" value="between">
                                <label for="between">Nrs. 15,000-NRs. 25,000</label>
                            </li>
                            <li>
                                <input class="me-3" type="radio" id="above" name="price" value="above">
                                <label for="above">NRs. 25,000 & above</label>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="prices categories mt-5">
                    <div class="categories-name">
                        <h6>Color</h6>
                    </div>
                    <div class="price-list color-list">
                        <ul>
                            <li> <input type="checkbox" id="red" name="red" value="red">
                                <label class="ps-3" for="red">Red</label>
                            </li>
                            <li> <input type="checkbox" id="Orange" name="Orange" value="Orange">
                                <label class="ps-3" for="Orange">Orange</label>
                            </li>
                            <li> <input type="checkbox" id="Brown" name="Brown" value="Brown">
                                <label class="ps-3" for="Brown">Brown</label>
                            </li>
                            <li> <input type="checkbox" id="Black" name="Black" value="Black">
                                <label class="ps-3" for="Black">Black</label>
                            </li>
                            <li> <input type="checkbox" id="Gold" name="Gold" value="Gold">
                                <label class="ps-3" for="Gold">Gold</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="prices categories mt-5">
                    <div class="categories-name">
                        <h6>Size</h6>
                    </div>
                    <div class="price-list ">
                        <ul>
                            <li> <input type="checkbox" id="Small" name="Small" value="S">
                                <label class="ps-3" for="Small">Small</label>
                            </li>
                            <li> <input type="checkbox" id="Medium" name="Medium" value="M">
                                <label class="ps-3" for="Medium">Medium</label>
                            </li>
                            <li> <input type="checkbox" id="Large" name="Large" value="L">
                                <label class="ps-3" for="Large">Large</label>
                            </li>
                            <li> <input type="checkbox" id="Extralarge" name="Extralarge" value="XL">
                                <label class="ps-3" for="Extralarge">Extra  large</label>
                            </li>
                            <li> <input type="checkbox" id="DoubleXI" name="DoubleXI" value="XXL">
                                <label class="ps-3" for="DoubleXI">Double XL</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="product-preview-section">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md col-sm-6">
                            <div class="product-card">
                                <div class="card-heading">
                                    <figure>
                                        <img class="d-block w-100" src="images/j1.png" alt="">
                                    </figure>
                                    <div class="hover-content">
                                        <ul>
                                            <li class="Wishlist"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Wishlist" href=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="View-details"><a data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="View details" href="product.php"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li class="Compare"><a data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare" href=""><i class="fas fa-sync-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sale">
                                        <span>-30%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-center">leather brown jacket</h6>
                                    <div class="rating text-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="price text-center py-1"><span
                                            class="text-decoration-line-through text-muted pe-1">Rs.
                                            5,000</span><span>Rs.2,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php');?>