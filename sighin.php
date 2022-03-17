<?php
session_start();

    include './breif-php/conndb.php';

   $emailErr = $passErr = '';
   $email = $password = "";
   $partener = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

   //validation email and password

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ // mnin acseder page bi methode post
  //  if(isset($_POST['submit'])){
      if(empty($_POST['email'])){     // condition pour rendre le champ obligatoire. empty validation du valeur
        $emailErr = "Please enter an email";
      }
      else{
        $email = $_POST['email'];
          if(!preg_match($partener, $email)){ 
      //  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Please enter a valid email";
          }
      }
      if(empty($_POST['password'])){

        $passErr = "enter password";
      }
      else{
        $password = $_POST['password'];
      }
  }

    //validation login pour aviter des script XSS and ajouter des cookies and session.

    
    // $email    =  mysqli_real_escape_string($conn, $email);
    // $Password =  mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM comptes where e_mail = '$email' AND  passwordA = '$password'";

    $result = mysqli_query($conn, $sql);

    //if result matched $email and $password table row must be 1 row,

    // $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    

    if($row > 0){
      
      $_SESSION['name']=$row['Name'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['password']=$_POST['password'];
     
        //cookies
        if(!empty($_POST['checked'])){
          //cookies
          setcookie('email', $email, time() + 10);
          setcookie('password', $password, time() + 10);
          }
          
          header('location: dashboard.php');
    }

    function cookie() {
      if(isset($_COOKIE['email']))
        {
          echo $_COOKIE['email'] ; 
        }
      };

      function cookieA() {
        if(isset($_COOKIE['password']))
          {
            echo $_COOKIE['password'] ; 
          }
        }

    include './breif-php/head.php';
?>

<body>
  <main>
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
                        <label for="mail" class="form-label">Email <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" id="mail" placeholder="Enter your email" name="email"  value="<?php cookie(); ?>">
                        <span class="text-danger fs-6"><?php echo $emailErr ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" class="form-control" id="password1" placeholder="Enter your password" name="password" value="<?php cookieA()?>">
                        <span class="text-danger fs-6"><?php echo $passErr ?></span>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="checked" id="Check1">
                        <label class="form-check-label" for="Check1">remember me</label>
                    </div>

                    <input class="btn btn-lg btn-info w-100 text-white" type="submit" name="submit" value="Sign In">

                    <p class="text-center fs-6 pt-3">Don't have acount <a href="./index.php">Sigh Up</a></p>
                </form>
            </div>
        </div>
    </div>



   <?php
        include './breif-php/footre.php';
   ?>
   