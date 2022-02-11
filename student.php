<?php
    // $students = array (
    //     array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Ahemed' , 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Sabir'  , 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Taib'   , 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Maher'  , 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    //     array('Name' => 'Usename', 'E-mail' => 'user@email.com', 'Phone' => '00012223', 'Number' => '1234567305477760', 'admission' => '08-Dec, 2021'),
    // );

        
        
    $image = <<<IMAGE
        <img class="w-50 rounded-1" src="./image/youcode.png" alt="user">
        IMAGE;

                //connect db in php page
                include './breif-php/conndb.php';
                
                include './breif-php/head.php';
                include './breif-php/sidebar.php'; 
                include './breif-php/header.php';
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
                                <a class="btn d-none d-lg-inline btn-sm btn-primary btn-create p-2" data-bs-toggle="modal" data-bs-target="#add">ADD NEW STUDENT</a>
                                <a class="btn d-inline d-lg-none d-md-none btn-sm btn-primary btn-create p-2" data-bs-toggle="modal" data-bs-target="#add">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </a>
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

                                        // $students = file_get_contents("student.json");
                                        // $students = json_decode($students, true);


                                        // READ DB with CRUD
                                        
                                        $sql = "SELECT * FROM student_a"; //var dans un requte

                                        $result = mysqli_query($conn, $sql);

                                        if($result) {
                                            while($row = mysqli_fetch_array($result)){ 
                                                $name            = $row['name'];
                                                $mail            = $row['e_mail'];
                                                $phone           = $row['phone'];
                                                $enroll_Number   = $row['enroll_number'];
                                                $DateOfAdmission = $row['DateOfAdmission'];
                                    ?> 

                                <tr class="bg-withe">
                                    <td class="align-middle"><?php echo $image ?></td>
                                    <td class="align-middle"><?php echo $row['name']; ?></td>
                                    <td class="align-middle"><?php echo $row['e_mail']; ?></td>
                                    <td class="align-middle"><?php echo $row['phone']; ?></td>
                                    <td class="align-middle"><?php echo $row['enroll_number']; ?></td>
                                    <td class="align-middle"><?php echo $row['DateOfAdmission']; ?></td>
                                    <td class="align-middle">
                                        <a href="edit-stud.php?id=<?php echo $row['id'];?>" class="fs-5 add text-decoration-none me-2" title="Edite"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="delet-stud.php?id=<?php echo $row['id']; ?>" class="fs-5 delete text-decoration-none" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr> 
                                
                                <?php  }
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php
        include './breif-php/footre.php';
   ?>