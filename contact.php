<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>
<section class="contact-info custom-margin">
    <div class="container">
        <div class="page-title">
            <h4>Contact us</h4>
        </div>
        <div class="row gy-4 ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="address">
                    <div class=" contact-item">
                        <i class="fas fa-location-arrow"></i>
                        <h6>Address</h6>
                        <span>Maitidevi , Kathmandu</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="tell">
                    <a href="tel:977-943523454">
                            <div class=" contact-item">
                                <i class="fas fa-mobile"></i>
                                <h6>Mobile</h6>
                                <span>+977-943523454</span>
                            </div>
                        </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="mail">
                    <a href="mailto:info@example.com">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <h6>Email</h6>
                            <span>info@example.com</span>
                        </div>
                    </a>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form-google custom-margin">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="contact-form">
                    <div class="heading">
                        <h4>DROP US A MESSAGE</h4>
                    </div>
                    <form action="">
                        <div class="pt-3">
                            <label for="name">Name*</label><br>
                            <input type="text" name="name" id="name" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="pt-3">
                            <label for="contact">Contact*</label><br>
                            <input type="number" name="contact" id="contact" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="pt-3">
                            <label for="email">Email*</label><br>
                            <input type="email" name="email" id="email" required><br>
                            <span class="error-message pt-3 text-danger"></span>
                        </div>
                        <div class="pt-3">
                            <label for="message">Message</label><br>
                            <textarea name="message" id="message" cols="30" rows="4"></textarea>
                        </div>
                        <div class="submit-button"><button type="submit"> <i class="fas pe-3 fa-paper-plane"></i>Send Message</button></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4631803306793!2d85.3330176150335!3d27.702981932290715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1657279446723!5m2!1sen!2snp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php');?>