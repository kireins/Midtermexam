<?php
require 'function.php';

if(isset($_POST["submit"])){
    
    if(create($_POST) > 0){

        echo " 
            <script>
            alert('Data successfully added!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
    
        echo " 
        <script>
        alert('Failed to add data!');
        document.location.href = 'index.php';
        </script>
    ";
    }



}
?>

<?php

require 'function.php';

if(isset($_POST["submit"])){
   if(create($_POST) > 0){

        echo " 
            <script>
            alert('Data successfully added!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
    
        echo " 
        <script>
        alert('Failed to add data!');
        document.location.href = 'index.php';
        </script>
    ";

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
    <h1> Create Fashun</h1>
    <form action="" method="post">
        <label for="fashun_image">Image : </label>
        <input type="text" name="fashun_image" id="fashun_image" required></input>
        <p>
        <label for="fashun_name">Name : </label>
        <input type="text" name="fashun_name" id="fashun_name" required></input>
        <p>
        <label for="fashun_price">Price : </label>
        <input type="text" name="fashun_price" id="fashun_price" required></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>