<?php
    include './breif-php/head.php';
?>

<body>
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="rounded-3 bg-white p-4 col-lg-4 col-md-6 col-sm-7 ">
            <div class="row">
                <form>
                    <h1 class="mx-4 ps-3 border-start fw-bold">E-classe</h1>
                    <div class="text-center mt-4">
                        <h2>SIGN IN</h2>
                        <p class="text-secondary">Enter your credentials to access your account</p>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password1" placeholder="Enter your password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">remember me</label>
                    </div>
                    <a class="btn btn-lg btn-info w-100 text-white" href="./dashboard.php">SIGNIN</a>
                    <p class="text-center fs-6 pt-3">Forgot your password? <a href="#">Reset Password</a></p>
                </form>
            </div>
        </div>
    </div>



   <?php
        include './breif-php/footre.php';
   ?>