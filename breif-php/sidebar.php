<?php 
    $sidebar = <<< SIDEBAR
            <!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
                <link rel="stylesheet" href="./css/style.css">
                <title>Home</title>
            </head>
            
            <body>
                <div class="container-fluid">
                    <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div
                    class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">
                    <a href="#" class="d-flex align-items-center pb-lg-4 pb-5 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline border-start ps-3 fw-bold text-dark">E-classe</span>
                        <span class="fs-5 d-inline d-sm-none d-lg-none border-start ps-2 fw-bold text-dark">E-C</span>
                    </a>
                    <div class="d-flex flex-column align-items-center text-dark d-sm-inline d-none text-center">
                        <img class="rounded-circle w-75" src="./image/youcode.png" alt="photo">
                        <p class="fw-bold pt-2 m-0">Admin name</p>
                        <a class="pb-3 text-decoration-none fs-6" href="#">Admin</a>
                    </div>
                    <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                        <li class="selected">
                            <a href="./dashboard.php" class="nav-link align-middle px-0">
                                <i class="fa fa-home" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Home</span>
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                <span class="ms-1 d-none d-sm-inline ps-3">Course</span>
                            </a>
                        </li>
                        <li class="selected">
                            <a href="./student.php" class=" nav-link px-0 align-middle">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span class="ms-1 d-none d-sm-inline ps-1">Students</span></a>
                        </li>
                        <li class="selected">
                            <a href="./payment.php" class="nav-link px-0 align-middle ">
                                <i class="fa fa-money" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Payment</span>
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-flag" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Report</span>
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-cogs" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Settings</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="selected">
                        <a href="./index.php" class="nav-link px-0 align-middle">
                            <span class="me-2 d-none d-sm-inline ps-2">Logout</span> 
                            <i class="fa fa-sign-out" aria-hidden="true"></i> 
                        </a>
                    </div>
                </div>
            </div>
        SIDEBAR;
        
        echo $sidebar;
