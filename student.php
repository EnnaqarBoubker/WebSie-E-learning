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
                                <a href="./add-stud.php" class="btn d-none d-lg-inline btn-sm btn-primary btn-create p-2">ADD NEW STUDENT</a>
                                <a href="./add-stud.php" class="btn d-inline d-lg-none d-md-none btn-sm btn-primary btn-create p-2">
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

                                        $students = file_get_contents("student.json");
                                        $students = json_decode($students, true);

                                        foreach ($students as $key => $val) :
                                           
                                    ?> 

                                <tr class="bg-withe">
                                    <td class="align-middle"><?php echo $image ?></td>
                                    <td class="align-middle"><?php echo $val['Name']; ?></td>
                                    <td class="align-middle"><?php echo $val['E-mail']; ?></td>
                                    <td class="align-middle"><?php echo $val['Phone']; ?></td>
                                    <td class="align-middle"><?php echo $val['Number']; ?></td>
                                    <td class="align-middle"><?php echo $val['Admission']; ?></td>
                                    <td class="align-middle">
                                        <a href="edit-stud.php?index=<?php echo $key; ?>" class="fs-5 add text-decoration-none me-2" title="Add"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="delet-stud.php?index=<?php echo $key; ?>" class="fs-5 delete text-decoration-none" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr> 
                                
                                <?php  endforeach;?>

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