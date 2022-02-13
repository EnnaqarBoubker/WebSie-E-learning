<?php
    include './breif-php/conndb.php';

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "DELETE FROM student_a WHERE id = $id";

        $result = mysqli_query($conn,$sql);

        if($result){
            // echo "Record deleted succesfully";
             header('location: student.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
    // header('location: read.php');

?>