
<?php

 include_once'conns.php';// my connection

 $id = $_GET['id']; // get id through query string

 $del = mysql_query("DELETE FROM update_st WHERE id = '$id'", $connection); // delete query

 if($del)
 {
 	mysql_close($connection);// connecttion close
 	header('location: admin.php');
 }
 else
 {
 	echo "Error Delete record"; //display error message
 }




?>