<?php

    include 'conns.php';

    $id = $_GET['id'];

    $dele = mysqli_query($connection, "DELETE FROM update_st WHERE id = '$id'");

    if($dele){
        header('location:admin.php');
    }else{
        echo 'erro delete';
    }


?>