<?php 

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
    
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function create($post){

    global $db;
    $id = $post["id_fashun"];
    $image = $post["fashun_image"];
    $name = $post["fashun_name"];
    $price = $post["fashun_price"];
   


    $query = "INSERT INTO tb_exam VALUES( null, '$id', '$image', '$name', '$price')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    $delete = "DELETE FROM tb_exam WHERE id_fashun= $id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}
function update($data){

    global $db;
    $id = $post["id_fashun"];
    $image = $post["fashun_image"];
    $name = $post["fashun_name"];
    $price = $post["fashun_price"];
   
    
    $query = "UPDATE tb_exam SET 
    fashun_image = '$image',
    fashun_name = '$name'
    fashun_price = '$price'
    WHERE id_fashun = $id
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>