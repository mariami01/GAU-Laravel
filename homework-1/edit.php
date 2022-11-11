<?php
    require_once "conn.php";

    foreach ($result as $items){
        $eng = $items['English'];
        $geo = $items['Georgian'];
    }
    if (isset($_POST['submit'])){
        $edit = $conn->prepare("UPDATE words SET English=:English,Georgian=:Georgian WHERE id = :Id");
        $edit->bindValue(':English', $_POST['Id']);
        $edit->bindValue(':English', $_POST['eng']);
        $edit->bindValue(':Georgian',$_POST['geo']);
        $edit->execute();
        // header('location:view_tests.php');
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENG-GEO Translate</title>
</head>
<body>
    <?php
        include "header.php";
    ?>

    <form>
        <input type="text"  value="<?php echo $eng ?>" name="eng"><br><br>
        <input type="text"  value="<?php echo $geo ?>" name="geo"><br><br>
        <button name ="submit">Submit</button>
    </form>
</body>
</html>