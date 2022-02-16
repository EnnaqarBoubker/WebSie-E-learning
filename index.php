<?php
   $emailErr = $passErr = '';
   $partener = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
  //  $errors = array('email'=> '', 'password' => '' );

   if(isset($_POST['submit'])){
 
    if(empty($_POST['email'])){
      $emailErr = "Please enter a email";
    }
    else{
      $email = $_POST['email'];
      
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Please enter a valid email";
      }
    }
    if(empty($_POST['password'])){
      $passErr = "enter password";
    }
    // else{
    //   echo "valide";
    // }
    }
    include './breif-php/head.php';
?>

<body>
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="rounded-3 bg-white p-4 col-lg-4 col-md-6 col-sm-7 ">
            <div class="row">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>">
                    <h1 class="mx-4 ps-3 border-start fw-bold">E-classe</h1>
                    <div class="text-center mt-4">
                        <h2>SIGN IN</h2>
                        <p class="text-secondary">Enter your credentials to access your account</p>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email <span class="etoil">*</span></label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter your email" name="email"  value="">
                        <span class="text-danger"><?php echo $emailErr ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password <span class="etoil">*</span></label>
                        <input type="password" class="form-control" id="password1" placeholder="Enter your password" name="password" >
                        <span class="text-danger"><?php echo $passErr ?></span>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">remember me</label>
                    </div>

                    <input class="btn btn-lg btn-info w-100 text-white" type="submit" name="submit" value="Envoyer">

                    <p class="text-center fs-6 pt-3">Forgot your password? <a href="#">Reset Password</a></p>
                </form>
            </div>
        </div>
    </div>



   <?php
        include './breif-php/footre.php';
   ?>