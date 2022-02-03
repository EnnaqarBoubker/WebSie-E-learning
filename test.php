<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">name</label>
        <input type="text"  name="namee"> <br><br>
        <label for="">age</label>
        <input type="number" name="agee" >
        <input type="submit" name="save" value="send">
    </form>

    <?php
        if(isset ($_POST ['save'])) {

            echo $_POST ['namee'] . "<br>" . $_POST['agee'];

        }
    ?>
</body>
</html>