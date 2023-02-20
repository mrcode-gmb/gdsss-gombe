

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Anouncement</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="anouncement">
		<h3>School Anouncement</h3>
		
	</div>


<?php
	include 'conns.php';

	session_start();

	$sql = mysqli_query($connection, "SELECT * FROM new_data");
	
	if(mysqli_num_rows($sql) > 0 ) {
		
		while ($row = mysqli_fetch_assoc($sql)) {
				$school_post = $row['school_post'];
				$date_time = $row['date_time'];

				echo '<div class="anouncement-body">
		<div class="body">
			<div class="body-tx">
				<img src="images/logo.png">
				<p>GDSSS_GOMBE</p>
			</div>
			<div class="date">
				<h6>'.$date_time.'</h6>
			</div>
			<div class="content">
				<p>'.$school_post.'</p>
				
			</div>
		</div>
	</div>

';

			}	
	}
	


?>
<div class="load">
		<div class="container mt-2 text-center">                                  
        	<div class="spinner-border text-center"></div>
        </div>
</div>
</body>
</html>