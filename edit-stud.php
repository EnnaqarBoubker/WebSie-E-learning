<?php 
    $index= $_GET['index'];

    $students = file_get_contents('student.json');
    $data = json_decode($students ,true);

    $student = $data[$index];


    include './breif-php/head.php';

?>
<body>
    <div class="container">
        <form method="POST">
           <a href="./student.php" class="my-4 btn btn-primary btn-create p-2">BACk</a>
            <!-- 2 column grid layout with text inputs for the first and last names -->
                
            <div class="form-outline">
                <label class="form-label" for="form6Example2">User name</label>
                <input type="text" id="form6Example2" class="form-control" name="Name" value="<?php echo $student['Name']; ?>"/>
                
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">E-mail</label>
                <input type="email" id="form6Example3" class="form-control" name="E-mail" value="<?php echo $student['E-mail']; ?>"/>
                
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Phone</label>
                <input type="text" id="form6Example4" class="form-control" name="Phone" value="<?php echo $student['Phone']; ?>"/>
                
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Enroll Number</label>
                <input type="text" id="form6Example7" class="form-control" name="Number" value="<?php echo $student['Number']; ?>"/>
                
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example8">Date of admission</label>
                <input type="date" id="form6Example8" class="form-control" name="Admission" value="<?php echo $student['Admission']; ?>"/>
                
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">Envoyer</button>
        </form>
    </div>

    <?php
        if(isset($_POST['save'])){

         
        $input = array(
            'Name'  => $_POST['Name'],
            'E-mail'  => $_POST['E-mail'],
            'Phone'  => $_POST['Phone'],
            'Number'  => $_POST['Number'],
            'Admission'  => $_POST['Admission']

        );

        $data[$index] = $input;


        $students = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('student.json', $students);


        header('location: student.php');
        }
    ?>