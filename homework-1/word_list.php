<?php 
    require_once "conn.php";
    $words = $conn->prepare("SELECT * FROM Words");
    $words->execute();
    $result = $words->fetchAll((PDO::FETCH_ASSOC));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENG-GEO Translate</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
        text-align: center;
        margin: 0 auto;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">English</th>
                <th scope="col">Georgian</th>
            </tr>
        </thead>
            <?php
                foreach ($result as $i => $items){
            ?>
            <tbody>
            <tr>
                <th scope="row"><?php echo $i+1?></th>
                <td><?php echo $items['English']?></td>
                <td><?php echo $items['Georgian']?></td>
                <td>
                <a href="edit.php?id=<?php echo $items['Id']?>" type="button">Edit</a>
                <a href="delete.php?id=<?php echo $items['Id']?>" type="button">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </thead>
    </table>

</body>
</html>