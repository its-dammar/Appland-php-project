<?php

require("../connection/config.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $select="SELECT *FROM app_feature where id= $id";
    $result=mysqli_query($con, $select);
    $data=$result->fetch_assoc();
    $row= '../uploads/'.$data['img'];
    unlink($row);

    $delete_user="DELETE FROM app_feature where id=$id";
    $result=mysqli_query($con, $delete_user);

    header("Refresh:0; url=index.php");
}


?>