<?php 
    $sidebar = <<< SIDEBAR

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
                        <li>
                            <a href="./dashboard.php" class=" selected nav-link align-middle px-0">
                                <i class="fa fa-home" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                <span class="ms-1 d-none d-sm-inline ps-3">Course</span>
                            </a>
                        </li>
                        <li>
                            <a href="./student.php" class=" nav-link px-0 align-middle">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span class="ms-1 d-none d-sm-inline ps-1">Students</span></a>
                        </li>
                        <li>
                            <a href="./payment.php" class="nav-link px-0 align-middle ">
                                <i class="fa fa-money" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Payment</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-flag" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa fa-cogs" aria-hidden="true"></i> 
                                <span class="ms-1 d-none d-sm-inline ps-2">Settings</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div>
                        <a href="./index.php" class="nav-link px-0 align-middle">
                            <span class="me-2 d-none d-sm-inline ps-2">Logout</span> 
                            <i class="fa fa-sign-out" aria-hidden="true"></i> 
                        </a>
                    </div>
                </div>
            </div>
            SIDEBAR;
        
        echo $sidebar;
