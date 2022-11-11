<?php
    require_once "conn.php";

    $data = $conn->prepare("SELECT * FROM info");
    $data->execute();
    $result = $data->fetchAll((PDO::FETCH_ASSOC));

    // $delete = $conn->prepare("DELETE FROM info WHERE Id := Id");
    // $delete->bindValue(':Id', $_GET['Id']);
    // $delete->execute();

    $sql = "DELETE FROM info WHERE Id=1";
    $conn->exec($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <th scope="col">Name</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Personal Id</th>
                    <th scope="col">Position</th>
                    <th scope="col">Registration Date</th>
                    <th scope="col">Position Assigned Date</th>
                </tr>
            </thead>
                <?php
                    foreach ($result as $i => $items){
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $i+1?></th>
                    <td><?php echo $items['firstname']?></td>
                    <td><?php echo $items['lastname']?></td>
                    <td><?php echo $items['born_date']?></td>
                    <td><?php echo $items['personal_id']?></td>
                    <td><?php echo $items['position']?></td>
                    <td><?php echo $items['registration_date']?></td>
                    <td><?php echo $items['position_assigned_date']?></td>
                    <td>
                    <a href="delete.php?id=<?php echo $items['Id']?>" type="button">Delete</a>
                    </td>
                </tr>

                <?php
                    }
                ?>
                </tbody>
    </table>
</body>
</html>