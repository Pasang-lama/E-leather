<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
            </ol>
        </nav>
    </div>
</section>
<div class="profile-dashboard-section custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-4 col-sm-12">
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
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="profile">
                    <div class="title">
                        <h4>My Wishlist</h4>
                    </div>
                    <div class="my-cart-table">
                        <table>
                            <tr>
                                <th>S.N</th>
                                <th>Product Image</th>
                                <th>Product Detail</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <figure>
                                        <img src="images/j1.png" alt="">
                                    </figure>
                                </td>
                                <td>Black Leather Jacket</td>
                                <td>
                                    <input type="number" min="1" value="1" />
                                </td>
                                <td>20,0000</td>
                                <td>
                                <div class="action-button">
                                        <button class="delet-product"><i class="fas fa-trash-alt"></i></button>
                                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <figure>
                                        <img src="images/j2.png" alt="">
                                    </figure>
                                </td>
                                <td>Black Leather Jacket</td>
                                <td>
                                    <input type="number" min="1" value="1" />
                                </td>
                                <td>20,0000</td>
                                <td>
                                <div class="action-button">
                                        <button class="delet-product"><i class="fas fa-trash-alt"></i></button>
                                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <figure>
                                        <img src="images/j1.png" alt="">
                                    </figure>
                                </td>
                                <td>Black Leather Jacket</td>
                                <td>
                                    <input type="number" min="1" value="1" />
                                </td>
                                <td>20,0000</td>
                                <td>
                                <div class="action-button">
                                        <button class="delet-product"><i class="fas fa-trash-alt"></i></button>
                                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <figure>
                                        <img src="images/j1.png" alt="">
                                    </figure>
                                </td>
                                <td>Black Leather Jacket</td>
                                <td>
                                    <input type="number" min="1" value="1" />
                                </td>
                                <td>20,0000</td>
                                <td>
                                    <div class="action-button">
                                        <button class="delet-product"><i class="fas fa-trash-alt"></i></button>
                                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="shopping-action-button ">
                        <div class="button me-3">
                            <a  class="continue-shopping"  href="categories.php"> Continue Shopping</a>
                        </div>
                        <div class="button">
                            <a class="checkout" href="checkout.php"> Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('includes/footer.php');?>