<?php
require 'function.php';

$fashun = get("SELECT * FROM tb_exam");
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
    <h1>Fashun list</h1>
    <a href="create.php">Create fashun</a>
    <p>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($fashun as $row):?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="update.php? id=<?= $row["id_fashun"];?>">Update</a> |
                <a href="delete.php? id=<?= $row["id_fashun"];?>">Delete</a>
            </td>
            <td><img src="img/<?=$row[""];?>" width="50"></td>
            <td><?=$row["fashun_name"];?></td>
            <td><?=$row["fashun_price"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
        
    </table>
</body>

</html>
