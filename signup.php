<?php
include './breif-php/head.php';

include './breif-php/conndb.php';

$name = $email = $passwordA = '';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passwordA = $_POST['passwordA'];
    

    $sql = "INSERT INTO `comptes`(`Name`, `e_mail`, `passwordA`) VALUES ('$name','$email','$passwordA')";

    $resultat = mysqli_query($conn, $sql);

    
    if (!$result) {
        die(mysqli_error($conn)); 
    }

    header('location: index.php');

}


?>

<body>
  <main>
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="rounded-3 bg-white p-2 col-lg-4 col-md-6 col-sm-7 vh">
            <div class="row">
                <form id="form" id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>">
                    <h1 class="mx-4 ps-3 border-start fw-bold">E-classe</h1>
                    <div class="text-center mt-4">
                        <h2>SIGN UP</h2>
                        <p class="text-secondary">Enter your credentials to access your account</p>
                    </div>
                    <div class="mb-3 form-controle">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo "$name" ?>">
                        <small class="error"></small>
                    </div>
                    <div class="mb-3 form-controle">
                        <label for="mail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo "$email" ?>">
                        <small class="error"></small>
                    </div>
                    <div class="mb-3 form-controle">
                        <label for="passwordA" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordA" placeholder="Enter your password" name="passwordA" value="<?php echo "$passwordA" ?>">
                        <small class="error"></small>
                    </div>
                   
                    <input class="btn btn-lg btn-info w-100 text-white" type="submit" name="submit" value="Sign Up">

                    <p class="text-center fs-6 pt-3">Already have an acount <a href="./index.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>

<!-- <script src="main.js"></script> -->


   <?php
        include './breif-php/footre.php';
   ?>