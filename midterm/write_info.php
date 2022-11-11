<?php
    require_once "conn.php";

    if (isset($_GET['submit'])){
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $born_date = $_GET['born_date'];
        $personal_id = $_GET['personal_id'];
        $position = $_GET['position'];
        $registration_date = date(DATE_RFC822);

        if ($firstname === "" && $lastname === ""){
            echo '<script>alert("Enter Info!")</script>';
        }
        else{
            $sql_insert = "INSERT INTO info(firstname, lastname, born_date,personal_id, position, registration_date)
                        VALUES ('$firstname', '$lastname','$born_date','$personal_id','$position', '$registration_date')";
            $conn->exec($sql_insert);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "header.php";
    ?>

    <form method="get" class="flex-container">
    <input type="text" name="firstname" placeholder="Name"><br><br>
    
    <input type="text" name="lastname" placeholder="Lastname"><br><br>
    <input type="date" name="born_date" placeholder="Date of Birth"><br><br>
    <input type="number" name="personal_id" placeholder="Personal Id"><br><br>
    <input type="text" name="position" placeholder="Position"><br><br>


    <button name="submit">Submit</button>

</body>
</html>