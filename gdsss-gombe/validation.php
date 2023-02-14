<!DOCTYPE html>
<html>
<head>
	<title>Delete Validation</title><link rel="stylesheet" type="text/css" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card w-50 offset-3 mt-5 shadow-lg">
			<div class="card-header shadow-lg">
				<h4 class="text-primary">Are You Sure You Want To Delete!!</h4>
			</div>
			<div class="card-body">
				<label>Comfirm Adminssion Number:</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="card-footer shadow-lg">
				<div class="form-group">
					<?php
    				include_once"conns.php";
					session_start();
					// $result = mysql_query("SELECT * FROM st_data", $connection);

    	// 			if(mysql_num_rows($result) > 0 ) {
        
     //    			while ($row = mysql_fetch_assoc($result)) {
     //            		$id = $row['id'];
     //            		$_SESSION['id'] = $row['id'];

					 echo '<b>'."<a href='delete.php?id={$_SESSION['id']}'><button class='btn btn-outline-danger btn-block'>Delete</button></a>".'</b>';

					// 	}
					// }
					 ?>
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>