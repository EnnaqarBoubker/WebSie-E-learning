<?php 
   include './breif-php/conndb.php';

   $id = $_GET['id'];

   $sql = "SELECT * FROM student_a WHERE id = $id";

   $resulet = mysqli_query($conn, $sql);

   $row = mysqli_fetch_array($resulet);
        $name            = $row['name'];
        $mail            = $row['e_mail'];
        $phone           = $row['phone'];
        $enroll_n        = $row['enroll_number'];
        $admission       = $row['DateOfAdmission'];

    include './breif-php/head.php';

?>
<body>
    <div class="container">
        <form method="POST">
           <a href="./student.php" class="my-4 btn btn-primary btn-create p-2">BACk</a>
            
                
            <div class="form-outline">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"/>
                
            </div>

          
            <div class="form-outline mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="e_mail" value="<?php echo $row['e_mail']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Enroll Number</label>
                <input type="text" class="form-control" name="enroll_number" value="<?php echo $row['enroll_number']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="DateOfAdmission" value="<?php echo $row['DateOfAdmission']; ?>"/>
                
            </div>
    
            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">SAVE</button>
        </form>
    </div>

<?php
        if(isset($_POST['save'])){
            $name            = $_POST['name'];
            $mail            = $_POST['e_mail'];
            $phone           = $_POST['phone'];
            $enroll_n        = $_POST['enroll_number'];
            $admission       = $_POST['DateOfAdmission'];
    
            $sql = "UPDATE student_a SET name = '$name', e_mail = '$mail', phone = '$phone', enroll_number = '$enroll_n', DateOfAdmission = '$admission' WHERE id = '$id'"; 
       
            $resulet = mysqli_query($conn, $sql);
            

            if($resulet){
                header("location: student.php");
            }
            else{
                die(mysqli_error($conn));
            }
        }
        
        include './breif-php/footre.php';
        
?>