<?php 
require 'function.php';
$id = $_GET["id"];
    if(delete($id) > 0){
        echo "
        <script>
        alert('Data successfully deleted!');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Failed to delete data!');
        document.location.href = 'index.php';
        </script>
        ";
    }

?>