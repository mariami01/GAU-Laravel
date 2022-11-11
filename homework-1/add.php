<?php
    require_once "conn.php";

    if (isset($_GET['submit'])){
        $eng = $_GET['eng'];
        $geo = $_GET['geo'];

        if ($eng === "" && $geo === ""){
            echo '<script>alert("Enter Words")</script>';
        }
        else{
            $sql_insert = "INSERT INTO words(English, Georgian)
                        VALUES ('$eng', '$geo')";
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
    <title>ENG-GEO Translate</title>
    <style>
        .flex-container {
        display: flex;
        background-color: DodgerBlue;
        text-align: center;
        }

        .flex-container > input {
        background-color: #f1f1f1;
        margin: 10px;
        padding: 20px;
        font-size: 30px;
        }
  
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <form method="get" class="flex-container">
    <input type="text" input" name="eng" placeholder="Enter English Word"><br>
    
    <input type="text" input" name="geo" placeholder="Enter Georgian Word"><br>
    <button name="submit">Submit</button>
    </form> 
</body>
</html>