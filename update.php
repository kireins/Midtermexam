<?php
require 'function.php';
$id = $_GET["id"];
$film = get ("SELECT * FROM tb_exam WHERE id_fashun = $id")[0];
if(isset($_POST["submit"])){
   if(update($_POST) > 0){

       echo "
        <script>
        alert('Data successfully updated!');
        document.location.href = 'index_film.php';
        </script>
       ";
   }else{

    echo "
        <script>
        alert('Failed to update data!');
        </script>
       ";
   }
   $db = mysqli_connect("localhost", "root", "", "db_kirei");
   echo mysqli_error($db);
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
    <h1> Update Fashun</h1>
    <form action="" method="post">
        <input type="hidden" name="id_fashun" value="<?= $fashun["id_fashun"]?>"></input>
        <label for="fashun_image">Image : </label>
        <input type="text" name="fashun_image" id="fashun_image" required value="<?= $fashun["fashun_image"];?>"></input>
        <p>
        <label for="fashun_name">Name : </label>
        <input type="text" name="fashun_name" id="fashun_name" required value="<?= $fashun["fashun_name"];?>"></input>
        <p>
        <label for="fashun_price">Price : </label>
        <input type="text" name="fashun_price" id="fashun_price" required value="<?= $fashun["fashun_price"];?>"></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>