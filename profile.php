<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                <div class="my-bio custom-margin">
                    <div class="title">
                        <h4 class="text-center">Welcome Jon Doe</h4>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <td>Jon Doe</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>jon@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td>+977 974324352</td>
                        </tr>
                        <tr>
                            <th>Provience</th>
                            <td>Bagmati</td>
                        </tr>
                        <tr>
                            <th>District</th>
                            <td>Kathmandu</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="profile">
                    <div class="title">
                        <h4>Update Profile</h4>
                    </div>
                    <form action="">
                        <div class="pt-3">
                            <label for="name">Name:</label><br>
                            <input type="text" name="name" id="name" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="email pt-3">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="number pt-3">
                            <label for="number">Contact Number</label><br>
                            <input type="number" name="number" id="number" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="provience pt-3">
                            <label for="provience">Shopping Provence</label><br>
                            <select name="provience" id="provience">
                                <option value="">Select your Shopping Provience</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Bagmati">Bagmati</option>
                            </select><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="district pt-3">
                            <label for="district">Shipping District</label><br>
                            <select name="district" id="district">
                                <option value="">Select your Shopping District</option>
                                <option value="Kathmandu" default>Kathmandu</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Kathmandu">Kathmandu</option>
                            </select><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="submit-button d-block"><button type="submit">Update</button></div>
                    </form>
                </div>
                <div class="my-order custom-margin">
                    <div class="title">
                        <h4>My Order <span>(3)</span></h4>
                    </div>
                    <div class="order-table">
                        <table>
                            <tr>
                                <th>
                                    <h6>S.N</h6>
                                </th>
                                <th>
                                    <h6>Order ID</h6>
                                </th>
                                <th>
                                    <h6>Order Date</h6>
                                </th>
                                <th>
                                    <h6>Status</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>223-3452-43</td>
                                <td>01/06/2022</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>223-3452-73</td>
                                <td>01/06/2022</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>223-4352-453</td>
                                <td>30/06/2022</td>
                                <td>Canceled</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('includes/footer.php');?>