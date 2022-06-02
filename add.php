<!-- creat add student popup in page student -->
<?php
                        
                        if (isset($_POST['save'])) {

                            $name            = $_POST['name'];
                            $mail            = $_POST['e_mail'];
                            $phone           = $_POST['phone'];
                            $enroll_n        = $_POST['enroll_number'];
                            $admission       = $_POST['DateOfAdmission'];
            
                            $sql = "INSERT INTO student (name, e_mail, phone, enroll_number, DateOfAdmission ) VALUES ('$name', '$mail', '$phone', '$enroll_n', '$admission')";
                                //return resultat du requete
                            $result = mysqli_query($conn, $sql);
            
            
                            if (!$result) {
                                die(mysqli_error($conn)); 
                            }

                        } 

                        include './breif-php/conndb.php';
                
                        include './breif-php/head.php';
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
                <?php include './breif-php/footre.php' ?>