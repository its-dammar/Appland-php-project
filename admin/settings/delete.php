<?php

require("../connection/config.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $delete_user="DELETE FROM settings where id=$id";
    $result=mysqli_query($con, $delete_user);

    header("Refresh:0; url=index.php");
}


?>