<?php 
 session_start();
 if(!$_SESSION['email']){
      header('location:index.php') ;
 }
    $image = <<<IMAGE
        <img class="w-50 rounded-1" src="./image/youcode.png" alt="user">
        IMAGE;

                // $home = "";
                // $cours = "";
                // $student = "selected";
                // $payement = "";
                // $report = "";
                // $settings = "";
                
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

                        <!-- creat add student popup in page student -->
                        <?php
                        
                                if (isset($_POST['save'])) {

                                    $name            = $_POST['name'];
                                    $mail            = $_POST['e_mail'];
                                    $phone           = $_POST['phone'];
                                    $enroll_n        = $_POST['enroll_number'];
                                    $admission       = $_POST['DateOfAdmission'];
                    
                                    $sql = "INSERT INTO student_a (name, e_mail, phone, enroll_number, DateOfAdmission ) VALUES ('$name', '$mail', '$phone', '$enroll_n', '$admission')";
                                        //return resultat du requete
                                    $result = mysqli_query($conn, $sql);
                    
                    
                                    if (!$result) {
                                        die(mysqli_error($conn)); 
                                    }

                                } 
                        ?>

                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="added" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                     <div class="modal-header">
                                         <form method="POST" class="form-group w-100" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                                                    
                                                <div class="form-outline">
                                                    <label class="form-label">User name</label>
                                                    <input type="text" class="form-control form-group" name="name" required/>
                                                    
                                                </div>

                                                <div class="form-outline">
                                                    <label class="form-label">E-mail</label>
                                                    <input type="email" class="form-control form-group" name="e_mail" required/>
                                                    
                                                </div>

                                                <div class="form-outline">
                                                    <label class="form-label">Phone</label>
                                                    <input type="text" class="form-control form-group" name="phone" required/>
                                                    
                                                </div>

                                                <div class="form-outline">
                                                    <label class="form-label">Enroll Number</label>
                                                    <input type="text" class="form-control form-group" name="enroll_number" required/>
                                                    
                                                </div>

                                                <div class="form-outline mb-3">
                                                    <label class="form-label">Date of admission</label>
                                                    <input type="date" class="form-control form-group" name="DateOfAdmission" required/>
                                                    
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-block" name="save">Envoyer</button>
                                        </form>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <!-- end creat add student popup in page student -->


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

                                        // READ DB with CRUD
                                        
                                        $sql = "SELECT * FROM student_a"; //var dans un requte

                                        $result = mysqli_query($conn, $sql);

                                            while($row = mysqli_fetch_array($result)) {
                                            // foreach($result as $row) {    
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
                                
                                <?php  }; ?>

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