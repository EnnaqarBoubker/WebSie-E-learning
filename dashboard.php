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

            <?php 
                include 'breif-php/sidebar.php'; 
                include 'breif-php/nav.php';
            ?>

                    <ul class="row list-unstyled mt-2 mt-lg-4 d-flex justify-content-evenly">
                        <li class=" mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class=" equal-hight border p-3 bg-color border-0 rounded-2" >
                                <div class="">
                                    <i class="fa fa-graduation-cap fs-1 colry" aria-hidden="true"></i>
                                    <p class="text-info">Students</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 ">243</p>
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
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 ">13</p>
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
                                    <p class="mt-0 mt-lg-3 mb-0 fw-bolder fs-4 "><span class="fs-5 fw-bold">DHS</span> 556,000</p>
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

    <script src="./css/bootstrap.bundle.min.js"></script>
</body>

</html>