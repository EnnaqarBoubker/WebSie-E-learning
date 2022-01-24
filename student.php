<?php
    $students = array (
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
        array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Enroll Number' => '1234567305477760', 'Date of admission' => '08-Dec, 2021', 'icon1' => '<i class="fa fa-pencil" aria-hidden="true"></i>', 'icon2' => '<i class="fa fa-trash" aria-hidden="true"></i>'),
    );

   
?>



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


                <div class="container mt-3 bg-withe">
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col col-xs-6 d-flex justify-content-between align-items-center mt-4 me-3">
                                <p class="panel-title fw-bolder fs-5">Students List</p>
                            </div>
                            <div class="col col-xs-6 text-right d-flex justify-content-end align-items-center">
                                <div class=" row fs-5 h-25">
                                    <i class="fa fa-sort-asc " aria-hidden="true"></i>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                </div>
                                <button type="button"
                                    class="btn d-none d-lg-inline btn-sm btn-primary btn-create p-2">ADD NEW STUDENT</button>
                                <button type="button"
                                    class="btn d-inline d-lg-none d-md-none btn-sm btn-primary btn-create p-2">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="height table-responsive">
                            <table class="table table-borderless">
                                <thead class=" text-color fs-6 fw-normal">
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Enroll Number</th>
                                        <th>Date of admission</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    
                                    <?php  
                                            foreach ($students as $student) {
                                    ?> 

                                        <tr class="bg-withe">
                                            <td><img class="w-50 rounded-1" src="./image/youcode.png" alt="user"></td>
                                            <td class="align-middle"><?php echo $student ['Name']; ?></td>
                                            <td class="align-middle"><?php echo $student ['E-mail']; ?></td>
                                            <td class="align-middle"><?php echo $student ['Phone']; ?></td>
                                            <td class="align-middle"><?php echo $student ['Enroll Number']; ?></td>
                                            <td class="align-middle"><?php echo $student ['Date of admission']; ?></td>
                                            <td class="align-middle">
                                                <a class="fs-5 add text-decoration-none me-2" title="Add"> <?php echo $student ['icon1']; ?></a>
                                                <a class="fs-5 delete text-decoration-none" title="Delete"><?php echo $student ['icon2']; ?></a>
                                            </td>
                                            
                                        </tr> 
                                    <?php  } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./css/bootstrap.bundle.min.js"></script>
</body>

</html>