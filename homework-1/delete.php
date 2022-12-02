<?php
    require_once "conn.php";

    // $delete = $conn->prepare('DELETE FROM Words WHERE Id := Id');
    // $delete->bindValue(':Id', $_GET['Id']);
    // $delete->execute();

    if(isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $query = "DELETE FROM info WHERE id=$id";
        $status = $conn->exec($query);
    
        if($status != 0) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "fail"]);
        }
    }
?>

