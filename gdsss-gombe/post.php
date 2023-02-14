<?php
	include"conns.php";

	if(isset($_POST['posts'])){
		$school_post = $_POST['school_post'];
		$date_time = $_POST['date_time'];

		$insert = mysql_query("INSERT INTO `new_data`(`school_post`, `date_time`) VALUES('$school_post', '$date_time')", $connection);

		if($insert){
					$message[] = 'Registration Seccessfully';
					header("location:annouce.php");
				}else{
					$message[] = 'Registration Failed';
				}
	}


	




?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST">
		<div class="log-form">
			<h3>School Anouncement</h3>
			<?php
				if(isset($message)){
					foreach($message as $message){
						echo '<div class="message">'.$message.'</div>';
					}
				}
			?>
			
			<input type="text" name="school_post" placeholder="School Anouncement" required>
			<input type="date" name="date_time" required>
			<button name="posts">Post</button>
		

		</div>
	</form>
</body>
</html>