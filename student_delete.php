<?php

 include_once 'conns.php';// my connection

 $id = $_GET['id']; // get id through query string

 $del = mysqli_query($connection, "DELETE FROM st_data WHERE id = '$id'"); // delete query

 if($del)
 {
 	mysqli_close($connection);// connecttion close
 	header('location: student_table.php');
 }
 else
 {
 	echo "Error Delete record"; //display error message
 }




?>