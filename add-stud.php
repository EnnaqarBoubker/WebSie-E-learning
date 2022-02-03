<?php
    include_once 'breif-php/head.php';
?>


<body>
    <div class="container">
        <form method="POST">
           <a href="./student.php" class="my-4 btn btn-primary btn-create p-2">BACk</a>
                
            <div class="form-outline">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="Name"/>
                
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="E-mail"/>
                
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="Phone"/>
                
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Enroll Number</label>
                <input type="text" class="form-control" name="Number"/>
                
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="Admission"/>
                
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">Envoyer</button>
        </form>
    </div>
</body>
<?php
    if(isset($_POST['save'])){

        //open json file.
        $students = file_get_contents('student.json');
        $students = json_decode($students ,true);

        $input = array(
            'Name'  => $_POST['Name'],
            'E-mail'  => $_POST['E-mail'],
            'Phone'  => $_POST['Phone'],
            'Number'  => $_POST['Number'],
            'Admission'  => $_POST['Admission']

        );

        $students[] = $input;


        $students = json_encode($students, JSON_PRETTY_PRINT);
		file_put_contents('student.json', $students);


        header('location: student.php');

    }


    include_once './breif-php/footre.php';
?>