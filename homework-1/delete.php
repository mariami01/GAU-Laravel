<?php
    require_once "conn.php";

    $delete = $conn->prepare('DELETE FROM Words WHERE Id := Id');
    $delete->bindValue(':Id', $_GET['Id']);
    $delete->execute();

?>