<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Cart.php">My Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
</section>
<div class="profile-dashboard-section custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="side-nav">
                    <ul>
                        <li><a href="profile.php">Account information</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li>
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Logout</a>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p>Are you sure you want to Logout?</p>
                                        </div>
                                        <div class="modal-footer mt-3">
                                            <button class="cancel-button" data-bs-dismiss="modal">Cancel</button>
                                            <button class="logout-button">logout</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="billing-address">
                    <div class="title mb-4">
                        <h4>Billing Address</h4>
                    </div>
                    <form action="">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="name">
                                    <label for="name">Name:</label><br>
                                    <input type="text" name="name" id="name" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="number ">
                                    <label for="number">Contact Number</label><br>
                                    <input type="number" name="number" id="number" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="email ">
                                    <label for="email">E-mail</label><br>
                                    <input type="email" name="email" id="email" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="region">
                                    <label for="region">Region</label><br>
                                    <select name="region" id="region">
                                        <option value="">Select your Region</option>
                                        <option value="Bagmati">Bagmati</option>
                                        <option value="Bagmati">Bagmati</option>
                                    </select><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="city">
                                    <label for="city">City</label><br>
                                    <select name="city" id="city">
                                        <option value="">Select your City</option>
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                    </select><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="street ">
                                    <label for="street">Street/Tole</label><br>
                                    <input type="text" id="street"><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="billing-address shipping-address mt-5">
                    <div class="title mb-4 d-flex align-items-center">
                        <h4 class="me-3">Shipping Address</h4>
                        <div class="same-as-billing-address">
                            <input type="checkbox" id="same-as-billing-address" name="same-as-billing-address"
                                value="Yes">
                            <label class="ps-1" for="same-as-billing-address"> Shipping Address same as Billing
                                Address</label><br>
                        </div>
                    </div>
                    <form action="">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="name">
                                    <label for="name">Name:</label><br>
                                    <input type="text" name="name" id="name" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="number ">
                                    <label for="number">Contact Number</label><br>
                                    <input type="number" name="number" id="number" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="email ">
                                    <label for="email">E-mail</label><br>
                                    <input type="email" name="email" id="email" required><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="region">
                                    <label for="region">Region</label><br>
                                    <select name="region" id="region">
                                        <option value="">Select your Region</option>
                                        <option value="Bagmati">Bagmati</option>
                                        <option value="Bagmati">Bagmati</option>
                                    </select><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="city">
                                    <label for="city">City</label><br>
                                    <select name="city" id="city">
                                        <option value="">Select your City</option>
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                    </select><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="street ">
                                    <label for="street">Street/Tole</label><br>
                                    <input type="text" id="street"><br>
                                    <span class="error-message pt-3 text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="submit-button d-block mt-5">
                    <button>Proceed To Pay</button>
                    <!-- <a class="checkout" href="checkout.php"> Proceed To Pay</a> -->
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('includes/footer.php');?>