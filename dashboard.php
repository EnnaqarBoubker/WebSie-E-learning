<?php

  session_start();
  if(!$_SESSION['email']){
       header('location:index.php') ;
  }

    include './breif-php/head.php';
    $title = "dashboard";
    // connected db
    
    include './breif-php/conndb.php';
    //students
        $sql ="SELECT COUNT(id) as 'number of students' FROM student_a";
        $res = mysqli_query($conn, $sql);
        $row1= mysqli_fetch_array($res);
    //cours
        $sql ="SELECT COUNT(id) as numberOfCours FROM cours";
        $res = mysqli_query($conn, $sql);
        $row2= mysqli_fetch_array($res);
    //payement
        $sql ="SELECT SUM(amount) FROM paye";   
        $res = mysqli_query($conn, $sql);
        $row3= mysqli_fetch_array($res);
        

                include 'breif-php/sidebar.php'; 
                include 'breif-php/header.php';
?>

                    <ul class="row list-unstyled mt-2 mt-lg-4 d-flex justify-content-evenly">
                        <li class=" mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class=" equal-hight border p-3 bg-color border-0 rounded-2" >
                                <div class="">
                                    <i class="fa fa-graduation-cap fs-1 colry" aria-hidden="true"></i>
                                    <p class="text-info">Students</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 "><?php echo $row1[0]; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class="  equal-hight border p-3 bg-color-one border-0 rounded-2" >
                                <div class="">
                                    <i class="fa fa-bookmark-o fs-1 colry-one" aria-hidden="true"></i>
                                    <p class="text-info">Course</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 "><?php echo $row2[0]; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class=" mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class=" equal-hight border p-3 bg-color-two border-0 rounded-2" >
                                <div class="">
                                    <i class="fa fa-money fs-1 colry-two" aria-hidden="true"></i>
                                    <p class="text-info">Payments</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 "><?php echo $row3[0]; ?><span class="fs-5 fw-bold"> DHS</span></p>
                                </div>
                            </div>
                        </li>
                        <li class=" col-md-6 col-lg-3">
                            <div class=" equal-hight border p-3 bg-color-three border-0 rounded-2" >
                                <div class="">
                                    <i class="fa fa-user-o fs-1 text-white" aria-hidden="true"></i>
                                    <p class="text-info">Users</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 ">3</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
        include './breif-php/footre.php';
   ?>