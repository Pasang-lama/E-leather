<?php include ('includes/header-login.php');?>
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </nav>
    </div>
</section>
<div class="change-password-form custom-margin">
    <div class="container">
        <div class="change-password m-auto">
            <div class="forms">
                <div class="title">
                    <h4>Change your password</h4>
                </div>
                <form action="">
                    <div class="opassword pt-3">
                        <label for="oPassword">Old Password:</label><br>
                        <input type="password" name="oPassword" id="opassword" required><br>
                        <span class="error-message pt-3 text-danger"></span>
                    </div>
                    <div class="npassword pt-3">
                        <label for="nPassword">Old Password:</label><br>
                        <input type="password" name="nPassword" id="npassword" required><br>
                        <span class="error-message pt-3 text-danger"></span>
                    </div>
                    <div class="confirmpassword pt-3">
                        <label for="confirmpassword">Confirm your password</label><br>
                        <input type="password" name="confirmpassword" id="confirmpassword" required><br>
                        <span class="error-message pt-3 text-danger"></span>
                    </div>
                    <div class="submit-button d-block mt-4">
                        <button>Change Password</button>
                    </div>
                </form>
            </div>
            <div class="information">
                <ul>
                    <li><h6>Password must contain:</h6></li>
                    <li>At least 1 upper case letter (A-Z)</li>
                    <li>At least 1 number (0-9)</li>
                    <li>At least 8 characters</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>